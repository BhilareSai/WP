<?php
require 'con.php'; // Or use require_once 'connection.php' if you want to ensure it's included only once


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $password = $_POST["password"];
    $email = $_POST['email'];

    $sql = "SELECT * FROM Staff WHERE email = '$email' AND password = '$password'";


    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        setcookie("email", $email, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");
        header("Location: userHome.php");
    } else {
        echo "<Script> alert('wrong creds')</script>";
    }
}
?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <form action="" method="post">
            <div class="field">
                <input type="text" name="email" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">
                Not a member? <a href="#">Signup now</a>
            </div>
        </form>
    </div>
</body>

</html>