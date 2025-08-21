<?php

session_start();

require_once '../../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo json_encode(
        [
            "request" => $_POST['role'],
        ]
    );

    $username = trim($_POST['username']);

    $email = $_POST['email'];


    $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
    $result = $conn->execute_query($sql);

    if ($result && $result->num_rows > 0) {
        $_SESSION['error'] = "User with same username or email already exist." . $stmt->error;
        header("Location: ../../views/user/createUser.php");
        exit();
        return;
    }
    $password = $_POST['password'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    $hashed_Password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO user (username, email, password, role, status) values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $username, $email, $hashed_Password, $role, $status);

    if ($stmt->execute()) {
        // Set a success message in session
        $_SESSION['success'] = "User created successfully!";
        // Redirect to the view page
        header("Location: ../../views/user/user.php");
        exit();
    }
}