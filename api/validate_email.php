<?php
session_start();
ini_set('display_errors', 1);

include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';
extract($_POST);

$userID =  $_SESSION['user_id'];
$User = new User();

$tableName = "verification_codes";
$columnsToSelect = "*";
$conditionColumn = "user_id";
$conditionValue = $userID;


$verify = fetchData($tableName, $columnsToSelect, $conditionColumn, $userID);
if($verify){

    if($verify['code_value'] !== $code){
        echo json_encode(['status'=>'failed', 'message'=>'Incorrect code. Please confirm and try again']);
    }else{

        if(updateData('users', ['verified'], [1], 'user_id', $userID)){

            deleteRecord('verification_codes', 'user_id', $userID);
            echo json_encode(['status'=>'success', 'message'=>'Verification successful']);

        }else{
            echo json_encode(['status'=>'failed', 'message'=>'Erro verifying']);

        }


    }
}else{
    echo json_encode(['status'=>'failed', 'message'=>'This code has expired or does not exist']);

}
