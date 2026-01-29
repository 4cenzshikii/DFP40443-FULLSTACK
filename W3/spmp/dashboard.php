<?php
session_start();
if (!isset($_SESSION['loggedin']) ||
$_SESSION['loggedin'] !== true) {
 header("Location: login.php");
 exit();
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>THIS IS DASHBOARD</title>
</head>
<body>
 <h1>THIS IS DASHBOARD <?php echo
$_SESSION['username']; ?>!</h1>
 <p>You have successfully logged in.</p>
 <a href="logout.php">Logout</a>
</body>
</html>
