<?php
session_start();
include("config/connection.php");




if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($con, $_POST['message']);

   $select_message = mysqli_query($con, "SELECT * FROM contact WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Message Sent already!';
   }else{
      mysqli_query($con, "INSERT INTO `contact`( con_id,name, email, number, message) VALUES( '','$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'Message Sent successfully!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "assets/css/contact.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
include('assets/navbar.php');
?>


        <section>
   <div class="elements">
    <div class="itemlist">
        <div class="cells">
            <div class="onetext">Get In Touch</div>
            <img src="assets/images/contact_us.jpg" alt="" class="pic">
            <div class="social_links">
                <span class="twotext">Connect with us:</span>
                <ul class="social_media">
                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                    <li><a href="#"><i class='bx bxl-youtube' ></i></a></li>
                    <li><a href="#"><i class='bx bxl-linkedin' ></i></a></li>
                </ul>
            </div>
        </div>
            <div class="submit_form">
                <h3 class="heading">Contact Us</h3>
                <form action="" method="POST">
                    <div class="fields" >
                        <input type="text" name="name" class="field1" required>
                        <label for="">Name</label>
                    </div>
                    <div class="fields" >
                        <input type="email" name="email"  class="field1" required>
                        <label for="">Email</label>
                    </div>
                    <div class="fields" >
                        <input type="tel" name="number" class="field1" required>
                        <label for="">Phone</label>
                    </div>
                    <div class="fields" >
                        <textarea name="message" class="field1" required id="message"  cols="32" rows="10"></textarea>
                        <label for="">Message</label>
                        
                    </div>
                    <input type="submit" class="btn2"  name="submit" value="Submit">
                </form>
        </div>
    </div>
   </div>
   </section>
     
</body>
</html>