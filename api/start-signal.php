<?php
session_start();
ini_set('display_errors', 1);

if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: ../signin.php");
    exit();
}




include_once '../config/database.php';
include_once '../models/functions.php';
include_once '../models/Payments.php';
include_once '../models/Users.php';

$userID =  $_SESSION['user_id'];
$User = new User();
$Payment = new Payments();

extract($_POST);


$userDetails = $User->getUserById($userID);
$walletBalance = $userDetails['wallet'];


if($userDetails['wallet'] < $price){
    json_encode(['status'=>'failed', 'msg'=>'Insufficient wallet balance']);
}else{
    $result = $User->debitWallet($price, $userID);

    // if($result){

    //     $tableName = 'users';
    //     $columns = ['wallet', ''];
    //     $values = [$wallet];
    //     $conditionColumn = 'user_id';
    //     $conditionValue = $userID;

    //     return updateData($tableName, $columns, $values, $conditionColumn, $conditionValue);
    // }
    if ($result) {
        // Example data for transaction
        $user_id = 123; // Replace with the actual user ID
        $amount = 50; // Replace with the actual amount
        $t_type = 'Subscription'; // Replace with the transaction type
        $destination = 'Signal Subscription'; // Replace with the destination or purpose of the transaction
        $t_status = 'Success'; // Replace with the status of the transaction

        // Call the insertTransaction method to insert transaction history
        $insertedId = $User->insertTransaction($user_id, $amount, $t_type, $destination, $t_status);

        if ($insertedId !== false) {
            // Insertion successful
            // Update signal status based on the subscription value
            $signalStatus = 'active'; // Assuming signal status will be set to 'active'

            // Determine subscription duration and expiry date
            $duration = 0;
            $expiryDate = null;
            switch ($value) {
                case 1: // 1 month
                    $duration = 1;
                    $expiryDate = date('Y-m-d H:i:s', strtotime('+1 month'));
                    break;
                case 2: // 3 months
                    $duration = 3;
                    $expiryDate = date('Y-m-d H:i:s', strtotime('+3 months'));
                    break;
                case 3: // 6 months
                    $duration = 6;
                    $expiryDate = date('Y-m-d H:i:s', strtotime('+6 months'));
                    break;
                case 4: // 12 months
                    $duration = 12;
                    $expiryDate = date('Y-m-d H:i:s', strtotime('+12 months'));
                    break;
                case 5: // Lifetime
                    $duration = 0; // Indefinite duration for lifetime subscription
                    $expiryDate = null; // No expiry date for lifetime subscription
                    break;
                default:
                    // Handle invalid subscription value
                    echo json_encode(['status' => 'error', 'message' => 'Invalid subscription value']);
                    exit; // Stop further execution
            }

            // Update signal status for the user
            // Example: $user->updateSignalStatus($userID, $signalStatus, $duration);

            // Insert subscription details into the subscriptions table
            $subscriptionTable = 'signal_subscriptions';
            $subscriptionColumns = ['user_id', 'duration', 'start_date', 'expiry_date'];
            $subscriptionValues = [$userID, $duration, date('Y-m-d H:i:s'), $expiryDate];

            $subscriptionResult = insertData($subscriptionTable, $subscriptionColumns, $subscriptionValues);

            if ($subscriptionResult) {
                updateSignalStatus($userID);
                // Subscription inserted successfully
                // echo json_encode(['status' => 'success']);
            } else {
                // Failed to insert subscription
                echo json_encode(['status' => 'error', 'message' => 'Failed to insert subscription']);
            }
        } else {
            // Failed to insert
            echo json_encode(['status' => 'error', 'message' => 'Failed to insert transaction history.']);

        }

    } else {
        // Failed to deduct from user's account
        echo json_encode(['status' => 'error', 'message' => 'Failed to deduct from user\'s account']);
    }
    

}

// if($Payment->checkWithdrawal($userID) == 0){

//     $details = $User->getUserById($userID);

//     $traderName = $details['first_name'] .' '.$details['last_name'];

//     if($wMethod == 'bank'){
//     echo $Payment->bankWithdrawal($wAmount, $wMethod, $traderName, $userID);

//     }else if($wMethod == 'chipper'){
//         echo $Payment->chipperWithdrawal($wAmount, $wMethod, $traderName, $chipperTag, $userID);

//     }elseif($wMethod == 'crypto'){
//         echo $Payment->cryptoWithdrawal($wAmount, $wMethod, $traderName, $wcoinType, $wAddress, $userID);
//     }else{
//         echo "No valid method selected";
//     }
// }else{
//     echo "You have a pending withdrawal";
// }





    



?>
