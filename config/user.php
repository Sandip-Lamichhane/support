<?php
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    status ENUM('Active', 'Inactive') NOT NULL DEFAULT 'Active',
    role ENUM('SuperAdmin', 'GeneralUser') NOT NULL DEFAULT 'SuperAdmin'
)";

    if($conn->query($sql) === true){
        echo "Table 'user' created successfully. <br>";
    }

?>