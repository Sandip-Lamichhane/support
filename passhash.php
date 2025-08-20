
<?php
$password = "admin";

// bcrypt hashing with default cost
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Store $hashedPassword in the database
echo $hashedPassword;
?>