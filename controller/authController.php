<?php

session_start();

require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password, role, status FROM user WHERE username = ?");

    if ($stmt) {

        $stmt->bind_param('s', $username);
        $stmt->execute();

        // Get result
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc(); 


            // Check password 
            if (password_verify($password, $user['password'])) {
                // Start session
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['status'] = $user['status'];

                if ($user['status'] !== 'Active') {
                    $_SESSION['error'] = "Your account is not active.";
                    header("location: ../views/auth/login.php");
                    exit();
                } else {
                    // Redirect to dashboard
                    session_start();
                    header("Location: ../views/dashboard/dashboard.php");
                    exit();
                }
            } else {
                $_SESSION['error'] = "Invalid username or Password!";
                header("location: ../views/auth/login.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Invalid username or Password!";
            header("location: ../views/auth/login.php");
            exit();
        }

        $stmt->close();
    } else {
        $_SESSION['error'] = "Error preparing statement.";
        header("location: ../views/auth/login.php");
        exit();
    }
}