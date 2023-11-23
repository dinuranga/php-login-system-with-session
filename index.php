<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>PHP Login Form</title>
</head>

<body>
    <h1>Login Form</h1>

    <form action="login.php" method="post">
        <div>
            <label for="uname">Enter Username :</label>
            <input type="text" name="username" id="uname" required>
        </div>
        <div class="password-container">
            <label for="pass">Enter password :</label>
            <input type="password" name="password" id="pass" required>
            <i id="eye" class="fa-solid fa-eye"></i>
        </div>
        <input type="submit" value="Log In" name="login">
        <input type="reset" value="Clear">
    </form>
    <script src="main.js"></script>
</body>

</html>