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
    
$fundUser = $User->fundWallet($amountToFund, $userID);


if($fundUser == 1){
    $walletAmount = $User->wallet + $amountToFund;

    $transTableName = 'transaction_history';
    $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
    $transValues = [$userID, $amountToFund, 'credit', 'Wallet deposit', 'successful', $payRef];
    
    echo insertData($transTableName, $transColumns, $transValues);
}else{
    echo json_encode(['message'=>'Error funding user']);
}



    



?>
