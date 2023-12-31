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

extract($_POST);
// print_r($_POST);
// die();
    

if($User->checkBankDetails($userID) == 0){
    $transTableName = 'acc_details';
    $transColumns = ['user_id', 'account_number', 'account_name', 'bank_name'];
    $transValues = [$userID, $accountNumber, $accountName, $bankName];

    echo insertData($transTableName, $transColumns, $transValues);

}else{
    $transTableName = 'acc_details';
    $transColumns = ['user_id', 'account_number', 'account_name', 'bank_name'];
    $transValues = [$userID, $accountNumber, $accountName, $bankName];
    $conditionColumn = 'user_id';
    $conditionValue = $userID;
    
    echo updateData($transTableName, $transColumns, $transValues, $conditionColumn, $conditionValue);
    
}




    



?>
