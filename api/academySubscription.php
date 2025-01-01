<?php
session_start();
ini_set('display_errors', 1);

include '../config/database.php';
include '../models/functions.php';
include '../models/Users.php';

extract($_POST);
// print_r($_POST);
// die();

$userID = $_SESSION['user_id'];
$User = new User();

$userDetails = $User->getUserById($userID);
$academyDetails = $User->getAcademyDetails($userID); // Assuming function name is getAcademyDetails

$courseDescriptions = [
    'online-1' => 'Online 1 Month',
    'online-3' => 'Online 3 Months',
    'online-6' => 'Online 6 Months',
    'online-12' => 'Online 1 Year',
    'physical' => 'Physical - ₦300,000/Month',
    'one-on-one' => 'One-on-One With De Crypto Oracle - $2,000'
];



if (array_key_exists($coursePlan, $courseDescriptions)) {
    $selectedCourse = $courseDescriptions[$coursePlan];
    $courseType = htmlspecialchars($selectedCourse);
} else {
    echo "Invalid course plan selected. ". $coursePlan;
    exit;
}

$Date = date('Y-m-d H:i:s');

if ($coursePlan == 'online-1') {
    $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 1 month'));
} elseif ($coursePlan == 'online-3') {
    $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 3 months'));
} elseif ($coursePlan == 'online-6') {
    $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 6 months'));
} elseif ($coursePlan == 'online-12') {
    $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 1 year'));
} elseif ($coursePlan == 'physical') {
    $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 1 month'));
} else {
    $trade_dur = date('Y-m-d H:i:s', strtotime($Date . ' + 5 days'));
}


    if ($chosenMethod == 'wallet') {

        $SubAcademy = $User->academySignUp(
            $userDetails['first_name'] . ' ' . $userDetails['last_name'],
            $chosenMethod,
            $coursePrice,
            $courseType,
            $trade_dur,
            $userID
        );

        if($SubAcademy == true) {
            $User->debitWallet($coursePrice, $userID);

            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $coursePrice, 'debit', 'Academy Signup', 'successful', 1];
            echo insertData($transTableName, $transColumns, $transValues);
        } else {
            echo json_encode(['message' => 'Unable to subscribe to course']);

        }
    } elseif ($chosenMethod == 'bank transfer') {



        $transTableName = 'transaction_history';
        $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
        $transValues = [$userID, $coursePrice, 'debit', 'Academy Signup', 'successful', 1];
        $insertResult =  insertData($transTableName, $transColumns, $transValues);
        if($insertResult ==1){
            // Handle Bank Transfer Screenshot Upload
            if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
                $targetDir = "../uploads/user/";
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0755, true); // Create directory if it doesn't exist
                }

                $fileName = basename($_FILES['screenshot']['name']);
                $targetFile = $targetDir . $fileName;

                if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $targetFile)) {
                    


                    $SubAcademy = $User->academySignUpFile(
                        $userDetails['first_name'] . ' ' . $userDetails['last_name'],
                        $chosenMethod,
                        $coursePrice,
                        $courseType,
                        $trade_dur,
                        $userID,
                        $fileName
                    );

                    $duration = 30*60;
                    // Calculate the expiration time
                    $expirationTime = time() + $duration;
                    // Store the expiration time in the session
                    $_SESSION['expirationTime'] = $expirationTime;

                    $_SESSION['pending-sign-up'] = 30;

                    echo json_encode(['status'=>'success', 'message' => 'Academy scubscription successful.']);


                } else {
                    echo json_encode(['message' => 'File upload failed.']);
                }
            } else {
                echo json_encode(['message' => 'No file uploaded or file upload error.']);
            }
        }
    
        
    } else {
        $transTableName = 'transaction_history';
        $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
        $transValues = [$userID, $coursePrice, 'debit', 'Academy Purchase', 'successful', 1];
        echo insertData($transTableName, $transColumns, $transValues);
    }

?>
