<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
// Test parameter



// Check if the user is logged in
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: ../signin.php");
    exit();
}
// echo $_SESSION['user_id'];

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
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title><?php echo $page_title; ?> </title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="./fonts.googleapis.com/css2e91f.css?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="./cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">


	
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
	
</head>