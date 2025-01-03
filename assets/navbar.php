<!DOCTYPE html>
<html lang="en">

<head><script src="https://kit.fontawesome.com/fd32ebea96.js" crossorigin="anonymous"></script>
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
  <link rel="stylesheet" href="assets/css/style.css">

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
            <a href="index.php" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="about.php" class="navbar-link" data-nav-link>
              <span>About</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="services.php" class="navbar-link" data-nav-link>
              <span>Service</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="blog.php" class="navbar-link" data-nav-link>
              <span>Blog</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="contact.php" class="navbar-link" data-nav-link>
              <span>Contact</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-contact">

     

      
      <?php if(isset($_SESSION['auth_user'])) :?>
      <i alt='user' id="profile" class="fa-regular fa-user fa-xl" onclick=toggleMenu()></i>
    
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
                <i class="fa-regular fa-user fa-xl"></i>
                <h2> <?=$_SESSION["auth_user"]["username"];?> </h2>                   
            </div>
            <hr>
            <div class="sub-menu-link">
                <i class="fa-solid fa-user "></i>
       `         <a href="#viewprofile">View Profile</a>
                <span>></span>
            </div>
            <div class="sub-menu-link">
                <i class="fa-solid fa-user"></i>
                <a href="viewbookings.php">Booking</a>
                <span>&gt;</span>
            </div>

           
            <div class="sub-menu-link">
                <i class="fa-solid fa-right-from-bracket"></i>
                <form action="config/logout.php" method="POST">
                    <button name="logout_btn" type="submit">logout</button>
                </form>
                <span></span>
            </div>

        </div>

    </div>
    
    
    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>

      <?php else :?>
        <a href="login.php" class="btn-outline">Login</a>

      </div>
      <?php endif;?> 


      <button class="nav-open-btn" aria-label="Open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
</body>