<?php
session_start();

include 'db_config.php';

if (isset($_SESSION['username'])) {
    echo "<script>window.location.href= 'home.php';</script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $loginQuery = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($loginQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_hash = $row['password'];

        if ($stored_hash !== null && password_verify($password, $stored_hash)) {
            $_SESSION['username'] = $username;
            echo "<script>window.location.href= 'home.php';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Invalid username or password');window.location.href = 'index.php';</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Invalid username or password');window.location.href = 'index.php';</script>";
    }

    $stmt->close();
}

$conn->close();
