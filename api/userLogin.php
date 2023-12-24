<?php
ini_set('display_errors',1);
require_once '../config/database.php'; // Assuming you have the User class in a separate file
require_once '../models/Users.php'; // Assuming you have the User class in a separate file

extract($_POST);

// print_r($_POST);
// die();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
      // Retrieve the POST data
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      // Create an instance of the User class
      $user = new User();
  
      // Call the login method
      $user->login($email, $password);
  
} else {
      // If it's not a valid AJAX request, return an error response
      echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}