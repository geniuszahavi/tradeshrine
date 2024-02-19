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

$userID =  $_SESSION['user_id'];
$Payments = new Payments();

extract($_POST);
// print_r($_POST);
// die();
    


if($Payments->buyCrypto($amountPaid, $coinValue, $coinType, $walletAddress,  $userID) == 1){
    // Set the buy time left in minutes

    // Set the duration for the timer in seconds (30 minutes)
    $duration = 30*60;

    // Calculate the expiration time
    $expirationTime = time() + $duration;

    // Store the expiration time in the session
    $_SESSION['expirationTime'] = $expirationTime;
    echo 1;
}

    



?>
