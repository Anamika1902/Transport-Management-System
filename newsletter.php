<?php
session_start();
include("config/connection.php");

if(isset($_POST['submit'])){

    
    $email = mysqli_real_escape_string($con, $_POST['email']);
 
 
    $select_message = mysqli_query($con, "INSERT INTO newsletter value ( '' ,'$email') ") or die('query failed');
 
    
 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSLETTER</title>
</head>
<body>
<section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <figure class="newsletter-banner img-holder">
            <img src="./assets/images/newsletter-banner.png" width="303" height="381" alt="newsletter banner"
              class="w-100">
          </figure>

          <div class="newsletter-content">

            <h2 class="h2 section-title">Subscribe for offers and news</h2>

            <form action="" class="newsletter-form">
              <input type="email" name="email_address" placeholder="Enter Your Email" aria-label="email"
                class="email-field">

              <button type="submit" name="submit" class="newsletter-btn">Subscribe Now</button>
            </form>

          </div>

        </div>
      </section>
</body>
</html>