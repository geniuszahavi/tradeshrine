<?php

class User extends Dbh {
    public $wallet;
    public function createUser($firstName, $lastName, $email, $phone, $password, $countryName, $countryCode) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $pdo = $this->connect();

        $sql = "INSERT INTO users (first_name, last_name, email, phone, password_hash, country_name, country_code, referl_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $user_hash = 'TS' .generateRandomString(6);

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$firstName, $lastName, $email, $phone, $hashedPassword, $countryName, $countryCode, $user_hash]);
        $lastInsertId = $pdo->lastInsertId();

        if($stmt->rowCount()){
            session_start();
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['session_id'] = $lastInsertId;

            $v_code = generateRandomString(5);

            $this->createVerificationCode($lastInsertId, $v_code, $email );



            echo json_encode(['status' => 'success', 'message' => 'User created successfully', 'last'=>$lastInsertId]);

           

        }else{
            echo json_encode(['status' => 'error', 'message' => 'Server error']);

        }
    }

    public function findRefCode($ref){
        $sql = "SELECT * FROM users WHERE referl_code = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ref]);

        return $stmt->fetch();
    } 

    public function createVerificationCode($user_id, $code, $email){
      

        $tableName = "verification_codes";
        $columns = ["user_id", "code_value"];
        $values = [$user_id, $code];

        $insertedId = insertData($tableName, $columns, $values);


        if ($insertedId) {
        //    return $insertedId;
        return true;
        } else {
            echo "Failed to insert data.";
        }
        return true;

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
                $this->wallet = $user['wallet'];
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

    public function getUserById($userID) {
        $sql = "SELECT * FROM users WHERE user_id = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userID]);

        return $stmt->fetch();
    }

    public function eheckByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount();
    }

    public function fundWallet($amountToFund, $userID){
        $userDetails = $this->getUserById($userID);
        $wallet = $userDetails['wallet'] + $amountToFund;

        $tableName = 'users';
        $columns = ['wallet'];
        $values = [$wallet];
        $conditionColumn = 'user_id';
        $conditionValue = $userID;

        return updateData($tableName, $columns, $values, $conditionColumn, $conditionValue);

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
    public function verifyEmail( $tableName, $columnsToSelect, $conditionColumn, $user_id,){

        // Example usage:
       

        try {
            $data = fetchData($tableName, $columnsToSelect, $conditionColumn, $user_id);

            if ($data !== false) {
                return $data;
            } else {
                echo "Failed to fetch data.";
            }
        } catch (Exception $e) {
            // Handle any other exceptions that might occur
            echo "Error: " . $e->getMessage();
        }
    }

    public function checkBankDetails($userID) {
        $sql = "SELECT * FROM acc_details WHERE user_id = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userID]);

        return $stmt->rowCount();
    }

    public function getBankDetails($userID) {
        $sql = "SELECT * FROM acc_details WHERE user_id = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userID]);

        if($details = $stmt->fetch()){
            return $details;
        }else{
            $details = [];
            $details['account_number'] = 'Not Set';
            $details['account_name'] = 'Not Set';
            $details['bank_name'] = 'Not Set';

            return $details;

        }
    }

    public function createReferral($referID, $referredEmail){
        $tableName = 'referrals';
        $columns = ['referer_id', 'referred_email', ];
        $values = [$referID, $referredEmail];
        insertDataAdvanced($tableName, $columns, $values);

        
    }
}
