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
    


echo $Payments->buyCrypto($amountPaid, $coinValue, $coinType, $walletAddress,  $userID); 

    



?>
