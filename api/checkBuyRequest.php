<?php

session_start();
ini_set('display_errors', 1);


include_once '../config/database.php';



$userID =  $_SESSION['user_id'];

$Server = new Dbh();



$query = "SELECT * FROM buy_requests WHERE user_id = '$userID'";
// Execute the query and fetch the result
$result = $Server->connect()->query($query);


while ($result->rowCount() > 1) {
    // Wait for changes in the database (e.g., using sleep() or polling with a certain interval)
    // echo $result->rowCount();
    sleep(2); 
    // Wait for 5 seconds before checking again
}

// Buy request exists
echo $result->rowCount();