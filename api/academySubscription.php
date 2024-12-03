<?php
session_start();
ini_set('display_errors', 1);

include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';
extract($_POST);

$userID =  $_SESSION['user_id'];
$User = new User();

    // print_r($userID);
    // die();

extract($_POST);

$userDetails = $User->getUserById($userID);

$academyDetails = $User->getAcademyDetails($userID); // Assuming function name is getAcademyDetails

$courseDescriptions = [
    'online-1' => 'Online 1 Month',
    'online-3' => 'Online 3 Months',
    'online-6' => 'Online 6 Months',
    'online-12' => 'Online 1 Year',
    'physical' => 'Physical - ₦300,000/Month',
    'one-on-one' => 'One-on-One With De Crypto Oracle - $2,000'
];

// print_r($_POST['coursePlan']);

// Check if the selected course plan exists in the mapping
if (array_key_exists($coursePlan, $courseDescriptions)) {
    $selectedCourse = $courseDescriptions[$coursePlan];
    $courseType =  htmlspecialchars($selectedCourse);
} else {
    echo "Invalid course plan selected.";
}


// Check if academy details exist and have an expiry date
if (isset($academyDetails) && isset($academyDetails['exp_date'])) {
  $expiryDate = strtotime($academyDetails['exp_date']); // Convert expiry date to timestamp

  // Check if current time is past the expiry date
  
} else {
    $Date = date('Y-m-d H:i:s');

    if($coursePlan == 'online-1'){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 1 month'));
    }elseif($coursePlan == 'online-3'){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 3 months'));
    }elseif($coursePlan == 'online-6'){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 6 months'));
    }elseif($coursePlan == 'online-12'){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 1 year'));
    }elseif($coursePlan == 'physical'){
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 1 month'));
    }else{
        $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 5 days'));
    }
        
    // echo $userID;
    $SubAcademy = $User->academySignUp($userDetails['first_name'] .' '.$userDetails['last_name'], $chosenMethod, $coursePrice, $courseType,  $trade_dur,  $userID);


    if($SubAcademy == true){

        if($chosenMethod == 'wallet'){
            // Update user wallet.

            $User->debitWallet($coursePrice, $userID);

            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $coursePrice, 'debit', 'Academy Signup', 'successful', 1];
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



    


