<?php
session_start();
ini_set('display_errors', 1);

include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';
extract($_POST);

$userID =  $_SESSION['user_id'];
$User = new User();

extract($_POST);

$userDetails = $User->getUserById($userID);

$academyDetails = $User->getAcademyDetails($userID); // Assuming function name is getAcademyDetails

// Check if academy details exist and have an expiry date
if (isset($academyDetails) && isset($academyDetails['exp_date'])) {
  $expiryDate = strtotime($academyDetails['exp_date']); // Convert expiry date to timestamp

  // Check if current time is past the expiry date
  if (time() > $expiryDate) {
    performAcademy();
  } else {
    echo "Your Shrine academy subscription is active.";
  }
} else {
    performAcademy();
}

function performAcademy(){


    $Date = date('Y-m-d H:i:s');

    if($classCategory == 1){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 1 month'));
    }elseif($classCategory == 2){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 6 months'));

    }elseif($classCategory == 3){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 5 years'));

    }else{
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 5 days'));
    }
        
    $SubAcademy = $User->academySignUp($userDetails['first_name'] .' '.$userDetails['last_name'], $chosenMethod, $coursePrice, $classCategory, $trade_dur,  $userID);


    if($SubAcademy == true){

        if($chosenMethod == 'wallet'){
            // Update user wallet.

            $User->debitWallet($coursePrice, $userID);

            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $coursePrice, 'debit', 'Academy Purchase', 'successful', 1];
            echo insertData($transTableName, $transColumns, $transValues);

        }else{
        
            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $coursePrice, 'debit', 'Academy Purchase', 'successful', 1];
            
            echo insertData($transTableName, $transColumns, $transValues);
        }
    }else{
        echo json_encode(['message'=>'Error funding user']);
    }


}