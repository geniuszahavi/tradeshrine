<?php
session_start();
ini_set('display_errors', 1);
// Test parameter



// Check if the user is logged in
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: ../signin.php");
    exit();
}
include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';
include '../models/Payments.php';


$userID =  $_SESSION['user_id'];
$User = new User();

$userDetails = $User->getUserById($userID);






?>
<!DOCTYPE html>
<html lang="en">


<head>

	<!-- PAGE TITLE HERE -->
	<title><?php echo $page_title; ?></title>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Some description for the page"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Boltz : Crypto Admin Laravel Template" />
	<meta property="og:title" content="Boltz : Crypto Admin Laravel Template" />
	<meta property="og:description" content="Boltz : Crypto Admin Laravel Template" />
	<meta property="og:image" content="../social-image.html" />
	<meta name="format-detection" content="telephone=no">
	
	
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
	<link href="public/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css"/>


    <link href="public/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" /> -->


	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet">
	</head>

    <link href="public/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
            	
</head>