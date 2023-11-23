<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>window.location.href= 'index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1>Hurrray!</h1>
    <p>Login Successful!</p>
    <a href='logout.php'><button>Log Out</button></a>
</body>

</html>