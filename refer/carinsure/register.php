<?php

@include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $account = mysqli_query($conn, "SELECT * FROM `account` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($account) > 0) {
        $display_msg[] = 'Account Already Exist';
    } else {
        if ($password != $cpassword) {
            $display_msg[] = 'Password Not Matched!!';
        } else {
            mysqli_query($conn, "INSERT INTO `account`(username, email, password) VALUES('$username', '$email', '$password')") or die('query failed');
            $display_msg[] = 'Registered Successfully!';
            header('location:login.php');
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Car Insurance Registration</title>
</head>

<body>

    <?php @include 'header.php'; ?>

    <?php
    if (isset($display_msg)) {
        if (is_array($display_msg)) {
            foreach ($display_msg as $msg) {
                echo '
                    <div class="display_msg">
                        <span>' . $msg . '</span>
                        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                    </div>
                ';
            }
        } else {
            echo '
                <div class="display_msg">
                    <span>' . $display_msg . '</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>
            ';
        }
    }
    ?>

    <div class="registration-form">
        <h2>Car Insurance Registration</h2>
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="cpassword" required>
            </div>
            <input type="submit" name="submit" value="Register">
        </form>
        <p>Already have an account? <a href="login.php">Login now</a></p>
    </div>
</body>

<script src="js/script.js"></script>
</html>