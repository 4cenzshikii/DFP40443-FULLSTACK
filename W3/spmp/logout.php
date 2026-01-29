<?php
session_start();
// Destroy all session data
session_destroy();
// Optional: Unset specific session variables
unset($_SESSION['loggedin']);
unset($_SESSION['username']);
// Redirect to login page
header("Location: login.php");
exit();
?>