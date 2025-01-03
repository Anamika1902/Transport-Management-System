<?php

@include 'config.php';

session_start();

?>
<?php
if (isset($_POST['send'])) {
    if (isset($_SESSION['userid'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $user_id = $_SESSION['userid'];

        $select_message = mysqli_query($conn, "SELECT * FROM `contact` WHERE username = '$name' AND email = '$email' AND number = '$number' AND message = '$message'") or die('query failed');

        if (mysqli_num_rows($select_message) > 0) {
            $display_msg[] = 'message sent already!';
        } else {
            mysqli_query($conn, "INSERT INTO `contact`(user_id, username, number, email, message) VALUES('$user_id', '$name', '$number', '$email', '$message')") or die('query failed');
            $display_msg[] = 'message sent successfully!';
        }
    } else {

        $display_msg[] = 'Login to continue';
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <title>home</title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">

</head>
<title>Vehicle Insurance</title>

<body style="background:/../img/nebg6.jpg ">

   <?php @include 'header.php'; ?>

   <!-- message display -->
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
   <div class="grid-container">
      <div class="intro-section">
         <div class="intro-text">
            <h1>Welcome to Vehicle Insurance Solutions</h1>
            <p>Get the best coverage for your vehicle with our reliable car insurance plans.</p>
            <a href = "home.php#service"class="cta-button" style = "text-decoration:none">Explore</a>
         </div>
      </div>
      <div class="car-image">
         <img src="carhome.png" alt="Car Insurance">
      </div>
   </div>

   <!-- about section -->
   <div id="about" class="about-section">
      <div class="about-image">
         <img src="ferrari.png" alt="About Us">
      </div>
      <div class="about-text">
         <h2>About Us</h2>
         <p>We are a leading vehicle insurance provider committed to delivering reliable coverage for your vehicle. Our team
            of experts is dedicated to offering tailored insurance plans to meet your specific needs.</p>
      </div>
   </div>

   <div class="about-boxes">
      <div class="about-box">
         <div class="box-icon"><i class="fas fa-shield-alt"></i></div>
         <h3>Comprehensive Coverage</h3>
         <p>Our comprehensive car insurance plans ensure that you're protected against a wide range of risks, from
            accidents to natural disasters.</p>
      </div>
      <div class="about-box">
         <div class="box-icon"><i class="fas fa-headset"></i></div>
         <h3>24/7 Customer Support</h3>
         <p>Our dedicated customer support team is available around the clock to assist you with any inquiries or claims
            you may have.</p>
      </div>
      <div class="about-box">
         <div class="box-icon"><i class="fas fa-money-bill"></i></div>
         <h3>Affordable Premiums</h3>
         <p>We offer competitive and affordable premium rates so you can get the coverage you need without breaking the
            bank.</p>
      </div>
      <div class="about-box">
         <div class="box-icon"><i class="fas fa-cogs"></i></div>
         <h3>Customized Plans</h3>
         <p>Every driver is unique. That's why we provide customizable insurance plans to match your driving habits and
            preferences.</p>
      </div>
   </div>

   <!-- services -->
   <h2 class="section-title" id = 'service'>
        <i class="fas fa-tools"></i> <!-- Add your desired icon class here -->
        Our Services
    </h2>
<div id="services" class="services">
    <div class="service-box">
        <img src="img/com.jpg" alt="">
        <h3 class="service-title">Comprehensive Coverage</h3>
        <p class="service-description">Protect your vehicle against various risks, including accidents, theft, and vandalism.</p>
        <ul class="service-points" style="text-align: left;">
            <li><i class="fas fa-check"></i> Accident coverage</li>
            <li><i class="fas fa-check"></i> Theft protection</li>
            <li><i class="fas fa-check"></i> Vandalism repair</li>
        </ul>
        <a href="applyservice.php?service=comprehensive" class="service-button">Apply Now</a>
    </div>
    <div class="service-box">
        <img src="img/lia.jpg" alt="Liability Coverage">
        <h3 class="service-title">Liability Coverage</h3>
        <p class="service-description">Be financially protected if you're responsible for causing damage to others' property or injuries.</p>
        <ul class="service-points" style="text-align: left;">
            <li><i class="fas fa-check"></i> Property damage coverage</li>
            <li><i class="fas fa-check"></i> Bodily injury coverage</li>
            <li><i class="fas fa-check"></i> Legal defense expenses</li>
        </ul>
        <a href="applyservice.php?service=liability" class="service-button">Apply Now</a>
    </div>
    <div class="service-box">
        <img src="img/coll.jpg" alt="Collision Coverage">
        <h3 class="service-title">Collision Coverage</h3>
        <p class="service-description">Get coverage for damage to your vehicle due to collisions with other vehicles or objects.</p>
        <ul class="service-points" style="text-align: left;">
            <li><i class="fas fa-check"></i> Vehicle collision protection</li>
            <li><i class="fas fa-check"></i> Repair and replacement coverage</li>
            <li><i class="fas fa-check"></i> Towing and rental reimbursement</li>
        </ul>
        <a href="applyservice.php?service=collision" class="service-button">Apply Now</a>
    </div>
    <div class="service-box">
        <img src="img/injury.jpg" alt="Personal Injury Protection">
        <h3 class="service-title">Personal Injury Protection</h3>
        <p class="service-description">Receive medical and related expenses coverage for injuries sustained in a car accident.</p>
        <ul class="service-points" style="text-align: left;">
            <li><i class="fas fa-check"></i> Medical coverage</li>
            <li><i class="fas fa-check"></i> Lost wages compensation</li>
            <li><i class="fas fa-check"></i> Funeral expenses</li>
        </ul>
        <a href="applyservice.php?service=injury" class="service-button">Apply Now</a>
    </div>
    <div class="service-box">
        <img src="img/add.jpg" alt="Additional Coverage">
        <h3 class="service-title">Additional Coverage</h3>
        <p class="service-description">Enhance your car insurance with additional coverage options tailored to your needs.</p>
        <ul class="service-points" style="text-align: left;">
            <li><i class="fas fa-check"></i> Roadside assistance</li>
            <li><i class="fas fa-check"></i> Rental car coverage</li>
            <li><i class="fas fa-check"></i> Gap insurance</li>
        </ul>
        <a href="applyservice.php?service=additional" class="service-button">Apply Now</a>
    </div>
    <div class="service-box">
        <img src="img/dis.jpg" alt="Special Discounts">
        <h3 class="service-title">Special Discounts</h3>
        <p class="service-description">Save more on your car insurance with special discounts and rewards for safe driving.</p>
        <ul class="service-points" style="text-align: left;">
            <li><i class="fas fa-check"></i> Good driver discount</li>
            <li><i class="fas fa-check"></i> Multi-policy discount</li>
            <li><i class="fas fa-check"></i> Student discounts</li>
        </ul>
        <a href="applyservice.php?service=discount" class="service-button">Apply Now</a>
    </div>
</div>
<!-- Services end -->

<!-- contact -->
<section id="contact" class="contact-section">
    <div class="contact-image">
      <img src="img/call.jpg" alt="Contact Us">
    </div>
    <div class="contact-form">
      <h2 class="contact-heading">Contact Us</h2>
      <form method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="number">Number</label>
          <input type="text" id="number" name="number" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <input class="submit-button" name="send" type="submit" value = 'Send Message'>
      </form>
    </div>
  </section>

  <!-- footer -->

<?php @include 'footer.php'; ?>


</body>


<style>

    /* contact */
.contact-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  padding: 80px;
  background-color: #f6f6f6;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  animation: slide-fade 1s forwards;
  margin-left: 40px;
  margin-right: 40px;
}

.contact-image img {
  max-width: 100%;
  border-radius: 10px;
}

.contact-form {
  color: #333;
}

.contact-heading {
  font-size: 28px;
  color: var(--primary);
  margin-bottom: 20px;
  opacity: 0; /* Start with opacity 0 */
  transform: translateX(-20px); /* Slide in from the left */
  animation: slide-fade 1s forwards; /* Apply the animation */
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  color: var(--dark);
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #cccccc;
  border-radius: 5px;
  transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
  border-color: var(--primary);
}

.submit-button {
  display: inline-block;
  background-color: var(--primary);
  color: #ffffff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
  margin-top: 20px;
}

.submit-button:hover {
  background-color: var(--secondary);
}

/* Animation keyframes */
@keyframes slide-fade {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slide-in {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
/* contact end */
</style>

</html>