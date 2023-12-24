<?php

class User extends Dbh {
    public function createUser($firstName, $lastName, $email, $phone, $password, $countryName, $countryCode) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $pdo = $this->connect();

        $sql = "INSERT INTO users (first_name, last_name, email, phone, password_hash, country_name, country_code) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$firstName, $lastName, $email, $phone, $hashedPassword, $countryName, $countryCode]);
        $lastInsertId = $pdo->lastInsertId();

        if($stmt->rowCount()){
            session_start();
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['session_id'] = $lastInsertId;
            
            echo json_encode(['status' => 'success', 'message' => 'User created successfully', 'last'=>$lastInsertId]);

        }else{
            echo json_encode(['status' => 'error', 'message' => 'Server error']);

        }
    }
    public function login($email, $password) {
        try {
            $user = $this->getUserByEmail($email);

            if ($user && password_verify($password, $user['password_hash'])) {
                // Password is correct
                session_start();
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['user_id'] = $user['user_id'];

                echo json_encode(['status' => 'success', 'message' => 'Login successful', 'user_id' => $user['user_id']]);
            } else {
                // Invalid credentials
                echo json_encode(['status' => 'error', 'message' => 'Invalid email or password']);
            }
        } catch (Exception $e) {
            // Handle exceptions (e.g., log the error)
            echo json_encode(['status' => 'error', 'message' => 'An error occurred']);
        }
    }

    public function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->fetch();
    }

    public function eheckByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount();
    }



    // Create transaction history
    public function insertTransaction($user_id, $amount, $t_type, $destination, $t_status) {
        try {
            $conn = $this->connect();
            
            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO transactions_history (user_id, amount, t_type, destination, t_status) VALUES (:user_id, :amount, :t_type, :destination, :t_status)");

            // Bind parameters
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':amount', $amount);
            $stmt->bindParam(':t_type', $t_type);
            $stmt->bindParam(':destination', $destination);
            $stmt->bindParam(':t_status', $t_status);

            // Execute the query
            $stmt->execute();

            // Get the last inserted ID
            $lastInsertedId = $conn->lastInsertId();

            // Close the connection
            $conn = null;

            return $lastInsertedId;

        } catch (PDOException $e) {
            // Handle the exception as needed
            die("Insertion failed: " . $e->getMessage());
        }
    }
}
