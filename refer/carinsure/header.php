<nav class="navbar">
    <a href="home.php" class="navbar-brand">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarInsure</h2>

        <?php
        if (isset($_SESSION['userid'])) {
            echo '
            <strong><p id = "loginname"><span>' . $_SESSION['username'] . '</span><a href="logout.php" class="power-button">
            <i class="fas fa-power-off"></i>
        </a></p></strong>
            ';
        }
        ?>
    </a>
    <button type="button" class="navbar-toggler" id="navbar-toggler">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="home.php" class="nav-item active">Home</a>
            <a href="home.php#about" class="nav-item">About</a>
            <a href="home.php#service" class="nav-item">Services</a>
            <a href="home.php#contact" class="nav-item">Contact</a>
            <?php
            if (isset($_SESSION['userid'])) {
                echo '<a href="subscription.php" class="nav-item">Subscription</a>';
            }
            ?>
        </div>
        <?php
        if (isset($_SESSION['userid'])) {
            echo '
                <a href="claim.php" class="btn btn-primary">Claim <i class="fa fa-arrow-right"></i></a>
            ';
        } else {
            echo '<a href="login.php" class="btn btn-primary">Login <i class="fa fa-arrow-right"></i></a>';
        }
        ?>
    </div>
</nav>




<style>
    #loginname {
        display: flex;
        align-items: center;
    }

    #loginname span {
        margin-right: 10px;
        text-transform: capitalize;
    }

    .power-button {
        color: var(--dark);
        text-decoration: none;
        margin-left: 10px;
        font-size: 20px;
        cursor: pointer;
        transition: color 0.3s;
    }

    .power-button:hover {
        color: var(--primary);
    }


    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        padding: 15px 50px;
    }

    .navbar-brand {
        text-decoration: none;
        color: var(--primary);
        display: flex;
        align-items: center;
    }

    .navbar-toggler {
        border: none;
        background-color: transparent;
        cursor: pointer;
        padding: 5px;
        display: none;
    }

    .navbar-toggler-icon {
        width: 20px;
        height: 20px;
        background-color: var(--primary);
        border-radius: 2px;
    }

    .navbar-collapse {
        display: flex;
        align-items: center;
    }

    .navbar-nav {
        display: flex;
        margin-left: auto;
    }

    .nav-item {
        margin-right: 20px;
        text-decoration: none;
        color: var(--dark);
        position: relative;
        padding: 10px;
    }

    .nav-item:hover {
        background-color: var(--primary);
        border-radius: 20px;
        color: white;
    }

    .btn {
        padding: 10px 20px;
        background-color: var(--primary);
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 2px;
        cursor: pointer;
        transition: background-color 0.3s;
        border-radius: 10px;
    }

    .btn:hover {
        background-color: var(--secondary);
    }

    .info-box {
        position: absolute;
        top: 100%;
        /* Adjust the value to control the distance from the header */
        right: 0.1rem;
        background-color: var(--light);
        border: var(--border);
        text-align: center;
        box-shadow: var(--box-shadow);
        padding: 2rem;
        border-radius: 0.5rem;
        width: 20rem;
        /* Adjust the width as needed */
        display: none;
        animation: fadeIn 0.2s linear;
    }

    /* ... rest of the CSS rules ... */


    .info-box.active {
        display: inline-block;
    }

    .info-box p {
        padding-bottom: 1rem;
        font-size: 2rem;
        color: var(--primary);
        line-height: 1.5;
    }

    .info-box p span {
        color: var(--dark);
    }

    .info-box .logout-btn {
        margin-top: 0.5rem;
    }
</style>