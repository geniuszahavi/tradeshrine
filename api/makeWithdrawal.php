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
// print_r($_POST);
// die();

if($Payment->checkWithdrawal($userID) == 0){

    $details = $User->getUserById($userID);

    $traderName = $details['first_name'] .' '.$details['last_name'];

    if($wMethod == 'bank'){
    echo $Payment->bankWithdrawal($wAmount, $wMethod, $traderName, $userID);

    }else if($wMethod == 'chipper'){
        echo $Payment->chipperWithdrawal($wAmount, $wMethod, $traderName, $chipperTag, $userID);

    }elseif($wMethod == 'crypto'){
        echo $Payment->cryptoWithdrawal($wAmount, $wMethod, $traderName, $wcoinType, $wAddress, $userID);
    }else{
        echo "No valid method selected";
    }
}else{
    echo "You have a pending withdrawal";
}





    



?>
