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
<body>
<?php
include('assets/navbar.php');
?>
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
</body>
</html>