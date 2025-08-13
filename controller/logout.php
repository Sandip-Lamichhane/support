<?php
session_start();
$_SESSION = array(); // Clears all session variables
session_destroy(); // Destroys the session

header("Location: ../views/auth/login.php"); // Redirects to the login page
exit();

?>