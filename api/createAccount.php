<?php
ini_set('display_errors',1);
require_once '../config/database.php'; // Assuming you have the User class in a separate file
require_once '../models/Users.php'; // Assuming you have the User class in a separate file

extract($_POST);

// Check if the request is an AJAX request
    // Handle the AJAX request

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Assuming your AJAX request sends data in JSON format

       
        // Create a new User instance and store the user in the database
        $user = new User();
        $check = $user->eheckByEmail($email);

       if($check){
        echo json_encode(['status' => 'error', 'message' => 'Email already exists']);

       }else{
            $user->createUser($firstName, $lastName, $email, $phone, $password, $countryName, $countryCode);

            // Send a response (you can customize the response based on your needs)
       }
        
       
    } else {
        // Invalid request method
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    }

?>
