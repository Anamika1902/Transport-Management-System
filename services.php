<?php
session_start();
include("config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transportio - To every direction</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <?php
  include('assets/navbar.php');
  ?>





  <main>
    <article>



      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <p class="section-subtitle">All Services</p>

          <h2 class="h2 section-title">Trusted For Our Services</h2>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since
            the when an
            printer took.
          </p>
          <ul class="service-list grid-list">
            <?php
            $service = "SELECT * FROM services";
            $service_run = mysqli_query($con, $service);


            if ($service_run) {
              while ($row = mysqli_fetch_array($service_run)) {

                ?>
                <li>



                  <div class="service-card">

                    <div class="card-icon">
                      <img id='service' src="data:image;base64,<?= base64_encode($row['image']); ?>" alt="items">
                    </div>

                    <div class="h3 card-title">
                      <h3>
                        <?= $row['vehicle'] ?>
                      </h3>
                    </div>

                    <div class="card-text">
                      <p>Capacity:
                        <?= $row['capacity'] ?> tons
                      </p>
                      <h3>
                        <?= $row['amount'] ?> Per Hour
                      </h3>
                      <form action="booking.php" method="POST">
                        <button class="btn-link"  type="submit" name="bookingbtn" value="<?= $row['id'] ?>">BOOK NOW.</button>
                      </form>
                    </div>
                  
              </div>

                    <?php
              }
            }
            ?>
            </li>

          </ul>

        </div>
      </section>





    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">Transportio</a>

          <p class="footer-text">
            Many desktop publishing packages and web page editors now use are dolra Ipsum as their default.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Quick Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Warehouse</a>
          </li>

          <li>
            <a href="#" class="footer-link">Air Freight</a>
          </li>

          <li>
            <a href="#" class="footer-link">Ocean Freight</a>
          </li>

          <li>
            <a href="#" class="footer-link">Road Freight</a>
          </li>

          <li>
            <a href="#" class="footer-link">Packaging</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Community</p>
          </li>

          <li>
            <a href="#" class="footer-link">Business Consulting</a>
          </li>

          <li>
            <a href="#" class="footer-link">Testimonials</a>
          </li>

          <li>
            <a href="#" class="footer-link">Track Your Shipment</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Condition</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2022 Transportio. All Rights Reserved by <a href="#" class="copyright-link">codewithsadee</a>
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>