<?php
// Start the session (if not already started)
session_start();

// Destroy the session and unset all session variables
unset($_SESSION['login']);
session_destroy();

// Redirect the user to the login page
header("location: AdminLogin.php"); // Replace "login.php" with your actual login page

// Ensure that no further code is executed after the redirect
exit();
?>


