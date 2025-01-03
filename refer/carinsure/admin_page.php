<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE htm@include 'config.php';l>
<html lang="en">

<head>
    <title>Admin</title>
    <link rel="icon" href="/https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'admin_header.php'; ?>

    <?php

    $query_user_accounts = "SELECT COUNT(*) as user_count FROM account WHERE user_type = 'user'";
    $result_user_accounts = mysqli_query($conn, $query_user_accounts);
    $user_accounts = mysqli_fetch_assoc($result_user_accounts);

    $query_admin_accounts = "SELECT COUNT(*) as admin_count FROM account WHERE user_type = 'admin'";
    $result_admin_accounts = mysqli_query($conn, $query_admin_accounts);
    $admin_accounts = mysqli_fetch_assoc($result_admin_accounts);

    $query_total_revenue = "SELECT SUM(price * tenure) as total_revenue FROM subscription";
    $result_total_revenue = mysqli_query($conn, $query_total_revenue);
    $total_revenue = mysqli_fetch_assoc($result_total_revenue);

    $query_total_claims = "SELECT COUNT(*) as total_claims FROM claims";
    $result_total_claims = mysqli_query($conn, $query_total_claims);
    $total_claims = mysqli_fetch_assoc($result_total_claims);

    $query_total_contacts = "SELECT COUNT(*) as total_contacts FROM contact";
    $result_total_contacts = mysqli_query($conn, $query_total_contacts);
    $total_contacts = mysqli_fetch_assoc($result_total_contacts);
    ?>

    <div class="dashboard-container">
        <div class="dashboard-box ">
            
                <h3>User Accounts</h3>
                <p class="dashboard-number">
                    <?php echo $user_accounts['user_count']; ?>
                </p>
            </div>
        
        <div class="dashboard-box ">
                <h3>Admin Accounts</h3>
                <p class="dashboard-number">
                    <?php echo $admin_accounts['admin_count']; ?>
                </p>
            </div>
    
        <div class="dashboard-box ">
                <h3>Total Revenue</h3>
                <p class="dashboard-number">
                    <?php echo $total_revenue['total_revenue']; ?>
                </p>
            </div>
        
        <div class="dashboard-box  ">
                <h3>Total Claims</h3>
                <p class="dashboard-number">
                    <?php echo $total_claims['total_claims']; ?>
                </p>
            </div>
        
        <div class="dashboard-box ">
                <h3>Total Messages</h3>
                <p class="dashboard-number">
                    <?php echo $total_contacts['total_contacts']; ?>
                </p>
            </div>
        </div>
    </div>

    <br>

</body>

<style>

    .dashboard-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-top: 20px;
    }

    .dashboard-box {
        background-color: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: calc(33.33% - 20px);
        min-width: 200px;
        text-align: center;
    }

    .dashboard-box h3 {
        margin: 0;
        color: #d81324;
    }

    .dashboard-number {
        margin: 10px 0;
        font-size: 1.5em;
        font-weight: bold;
        color: #555;
    }
</style>


</body>

</html>