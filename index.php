
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

<?php
include('assets/navbar.php');
?>

  <!-- 
    - #HEADER
 

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo">Transportio</a>
      </h1>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">Transportio</a>

          <button class="nav-close-btn" aria-label="Clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>
              <span>About</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#service" class="navbar-link" data-nav-link>
              <span>Service</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#blog" class="navbar-link" data-nav-link>
              <span>Blog</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>
              <span>Contact</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-contact">

        <h1>login</h1>

      </div>

      <button class="nav-open-btn" aria-label="Open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

 -->



  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home" id="home"
        style="background-image: url('./assets/images/truck13.jpg')">
        <div class="container">

          <div class="hero-content">

            <h2 class="h1 hero-title">
              <span class="span">To Every</span> Direction
            </h2>

            <p class="hero-text">
              There are many variations of passages of worem Ipsum available, but the majority
            </p>

            <a href="services.php" class="btn-outline">View Services</a>

            <img src="./assets/images/hero-shape.png" width="116" height="116" loading="lazy"
              class="hero-shape shape-1">

            <img src="./assets/images/hero-shape.png" width="116" height="116" loading="lazy"
              class="hero-shape shape-2">

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner img-holder" style="--width: 400; --height: 720;">
            <img src="./assets/images/about-banner.jpg" width="400" height="720" loading="lazy" alt=""
              class="img-cover">

            <img src="./assets/images/about-shape-1.png" width="260" height="170" loading="lazy" alt=""
              class="abs-img abs-img-1">

            <img src="./assets/images/about-shape-2.png" width="500" height="500" loading="lazy" alt=""
              class="abs-img abs-img-2">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">Why Choose Us</p>

            <h2 class="h2 section-title">We Are Professional Logistics & cargo Agency</h2>

            <p class="section-text">
              Sed ut perspiciatis unde omnis iste natus error volup tatem accusantium dolorem que laudantium, totam
              inventore.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Go beyond logistics, make the world go round and revolutionize business.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Logistics through innovation, dedication, and technology. ready, set, done.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  We take pride in serving our customers safely. together with passion.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Imagination what we can easily see is only a small percentage.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Quality never goes out of style. safety, quality, professionalism.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  The quality shows in every move we make where business lives.
                </p>
              </li>

            </ul>

            <a href="#" class="btn">Learn More</a>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

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
              $service="SELECT * FROM services";
              $service_run=mysqli_query($con,$service);


              if(mysqli_num_rows($service_run) > 0)

              {
                foreach($service_run as $book)
                {

                ?>
            <li>

            
              <div class="service-card">

                <div class="card-icon">
                <img id='service' src="data:image;base64,<?= base64_encode($book['image']); ?>"  alt="items">
                </div>

                <h3 class="h3 card-title">
                <?=$book['vehicle']?>
                </h3>

                <p class="card-text">

                Capacity:  <?=$book['capacity']?> tons
                </p>
                <h3><?=$book['amount']?>  Per Hour</h3>
                <a href="booking.php" class="btn-link" method="POST">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">BOOK NOW</span>
                </a>
              </div>

              <?php
                }
              }
              ?>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->





      <!-- 
        - #PROJECT
      -->

     




      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-label="blog" id="blog">
        <div class="container">

          <p class="section-subtitle">Our Blogs</p>

          <h2 class="h2 section-title">Recent news & events</h2>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since
            the when an
            printer took.
          </p>

          <ul class="blog-list grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 500;">
                  <img src="./assets/images/blog-1.jpg" width="770" height="500" loading="lazy"
                    alt="At the end of the day, going forward, a new normal that has evolved from. your only logistic partner."
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="card-meta" datetime="2022-08-02">
                    <span class="span">02</span> Aug
                  </time>

                  <h3 class="h3 card-title">
                    <a href="#">
                      At the end of the day, going forward, a new normal that has evolved from. your only logistic
                      partner.
                    </a>
                  </h3>

                  <p class="card-text">
                    New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit. typesetting
                    industry the standard
                    dummy text ever since the when an printer.
                  </p>

                  <a href="#" class="btn-link">
                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                    <span class="span">Read More</span>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 500;">
                  <img src="./assets/images/blog-2.jpg" width="770" height="500" loading="lazy"
                    alt="Going forward, a new normal that has evolved from generation. moving your products across all borders."
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="card-meta" datetime="2022-08-21">
                    <span class="span">21</span> Aug
                  </time>

                  <h3 class="h3 card-title">
                    <a href="#">
                      Going forward, a new normal that has evolved from generation. moving your products across all
                      borders.
                    </a>
                  </h3>

                  <p class="card-text">
                    New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit. typesetting
                    industry the standard
                    dummy text ever since the when an printer.
                  </p>

                  <a href="#" class="btn-link">
                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                    <span class="span">Read More</span>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER -->
 <?php

if(isset($_POST['newsemail'])){

    
    $email = mysqli_real_escape_string($con, $_POST['email_address']);
 
 
    $select_message = mysqli_query($con, "INSERT INTO newsletter values ('' ,'$email') ") or die('query failed');
 
    
 
 }
 else
 {
  echo'';
 }
?>
      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <figure class="newsletter-banner img-holder">
            <img src="./assets/images/newsletter-banner.png" width="303" height="381" alt="newsletter banner"
              class="w-100">
          </figure>

          <div class="newsletter-content">

            <h2 class="h2 section-title">Subscribe for offers and news</h2>

            <form action="" class="newsletter-form" method="POST" >
              <input type="email" name="email_address" placeholder="Enter Your Email" aria-label="email"
                class="email-field">

              <button type="submit" name="newsemail"  class="newsletter-btn">Subscribe Now</button>
            </form>

          </div>

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