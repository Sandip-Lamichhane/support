<?php

$db_host = "localhost";
$db_name = "support";
$db_username = "root";
$db_pass = "";

// Creating connection
$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>