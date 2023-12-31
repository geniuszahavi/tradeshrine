<?php
session_start();
ini_set('display_errors', 1);

include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';
extract($_POST);

$userID =  $_SESSION['user_id'];
$User = new User();


echo $User->checkBankDetails($userID);

