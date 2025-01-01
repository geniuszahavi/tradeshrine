<?php
session_start();
ini_set('display_errors', 1);

include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';

extract($_POST);

//  Fetch rate:
$tableName = "super_admin";
$columnsToSelect = ["*"];
$conditionColumn = "admin_id";
$conditionValue = 1;

$details =  fetchData($tableName, $columnsToSelect, $conditionColumn, $conditionValue);

echo json_encode(["status" => 'success', "naira_rate"=> $details['naira_rate']]);