<?php
session_start();

// Unset all session variables
$_SESSION = array();
session_unset();


// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect to login page or homepage
header("Location: ../signin.php"); // Change this to your login page or homepage
exit();