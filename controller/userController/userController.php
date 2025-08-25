<?php
session_start();
require_once '../../config/db.php';

$sql = "SELECT * FROM user where password = ?";
$result 
?>