<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_account = mysqli_query($conn, "SELECT * FROM `account` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select_account) > 0) {
        $row = mysqli_fetch_assoc($select_account);
        if ($_POST['password'] === $row['password']) {
            if ($row['user_type'] == 'admin') {
                $_SESSION['adminname'] = $row['username'];
                $_SESSION['adminemail'] = $row['email'];
                $_SESSION['adminid'] = $row['id'];
                header('location:admin_page.php');
            } elseif ($row['user_type'] == 'user') {
                $_SESSION['username'] = $row['username'];
                $_SESSION['useremail'] = $row['email'];
                $_SESSION['userid'] = $row['id'];
                header('location:home.php');
            } else {
                $display_msg[] = 'Incorrect Username and Password';
            }
        } else {
            $display_msg[] = 'Incorrect Password';
        }
    } else {
        $display_msg[] = 'Email not found. Register to login!';
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
    <title>Car Insurance Login</title>
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

    <div class="login-form">
        <h2>Car Insurance Login</h2>
        <form method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</body>

<script src="js/script.js"></script>

</html>