<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Add links to icon libraries and animation libraries here -->
</head>
<body>
    
    <?php
include('assets/navbar.php');
?>
   

    <section class="about-section">
        <div class="container">
            <h2>About Our Transport Services</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget quam eu velit lacinia rhoncus. 
                        Fusce in tristique libero. Curabitur hendrerit dui vel lectus volutpat, ac dictum ex tincidunt. 
                        Proin non erat sed ex pharetra iaculis.
                    </p>
                </div>
                <div class="about-features">
                    <div class="feature">
                        <!-- Add an icon here -->
                        <h3>Fast Delivery</h3>
                        <p>We ensure fast and reliable delivery services to meet your transportation needs.</p>
                    </div>
                    <div class="feature">
                        <!-- Add an icon here -->
                        <h3>Safe Transportation</h3>
                        <p>Your goods are transported safely and securely by our experienced team.</p>
                    </div>
                    <div class="feature">
                        <!-- Add an icon here -->
                        <h3>24/7 Support</h3>
                        <p>Our customer support team is available 24/7 to assist you with any inquiries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <!-- Footer content goes here -->
    </footer>
    <!-- Style -->

    <script src="scripts.js"></script>
</body>
<style>
  

/* Global Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1300px;
    margin: 0 auto;
    padding: 20px;
}

/* Header Styles */
header {
    background-color: #333;
    color: orange;
    padding: 10px 0;
    text-align: center;
}

/* About Us Section Styles */
.about-section {
    background-color: #fff;
    padding: 40px 0;
    text-align: center;
}

.about-section h2 {
    font-size: 32px;
    margin-bottom: 20px;
    margin-top: 80px;
}

.about-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.about-text p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
}

.about-features {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.feature {
    flex: 1;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: skyblue;
    transition: transform 0.3s ease;
}

.feature:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.feature h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

/* Add your icon styles here (e.g., FontAwesome) */

/* Add your animations here (e.g., Animate.css) */

</style>
</html>
