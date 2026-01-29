<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username = $_POST['username'];
 $password = $_POST['password'];

 if ($username == "acen" && $password ==
"emilia") {
 $_SESSION['loggedin'] = true;
 $_SESSION['username'] = $username;
 header("Location: dashboard.php");
 exit();
 } else {
 $error = "Invalid credentials!";
 }
}
?>

<form method="POST">
 User<input type="text"
 name="username">
 <input type="password"
 name="password">
 <input type="submit" value="login">

</form>