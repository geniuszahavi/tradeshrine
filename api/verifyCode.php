<?php
ini_set('display_errors', 1);

include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $verificationCode = $_POST['code'];

    // print_r($_POST);
    // die();

    try {
        $pdo = (new Dbh())->connect();
        
        // Check if the code exists in verification_codes table
        $stmt = $pdo->prepare("SELECT user_id FROM verification_codes WHERE code_value = ?");
        $stmt->execute([$verificationCode]);
        $result = $stmt->fetch();

        if ($result) {
            $userId = $result['user_id'];
            
            // Update verify column in users table
            $updateStmt = $pdo->prepare("UPDATE users SET verify = 1 WHERE user_id = ?");
            $updateStmt->execute([$userId]);

            // Delete the used code from verification_codes
            $deleteStmt = $pdo->prepare("DELETE FROM verification_codes WHERE code_value = ?");
            $deleteStmt->execute([$verificationCode]);

            echo json_encode(['status' => 'success', 'message' => 'Verification successful.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid verification code.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
}
