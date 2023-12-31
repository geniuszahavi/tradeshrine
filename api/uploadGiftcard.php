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


$file = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$ext = pathinfo($file, PATHINFO_EXTENSION);
$image_type = $_FILES['file']['type'];
$allowed_types = ['image/jpeg', 'image/png'];
$ext_array = ['jpg', 'JPG','png','PNG','JPEG','jpeg'];
if(!in_array($ext,$ext_array) && !in_array($image_type, $allowed_types)){
    echo "Invalid Image";
}else{
    $file_name = $file;
    $location = '../uploads/';

    if(move_uploaded_file($tmp_name, $location.$file_name)){


        $result = $Payments->sellGiftcard($amountPaid, $coinValue, $cointype,  $userID, $file_name);
        $msg = $result;
        
    }else{
        $msg = "Error! The file is probably too big";
    }

    echo $msg;


}
?>
