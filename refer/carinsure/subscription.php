<?php

@include 'config.php';

session_start();

$query = "SELECT * FROM subscription WHERE user_id = '{$_SESSION['userid']}'";
$result = mysqli_query($conn, $query);
$subscriptions = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Subscriptions</title>
    <link rel="icon" href="/https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php @include 'header.php'; ?>

    <div class="subscription-container">
        <?php if (empty($subscriptions)) : ?>
            <div class="no-subscription">
                <h3>No Subscriptions</h3>
                <p>You don't have any subscriptions yet.</p>
                <a href="home.php#service" class="buy-button">Buy Subscription</a>
            </div>
        <?php else : ?>
            
            <?php foreach ($subscriptions as $subscription) : ?>
                <?php
                $placedOnDate = strtotime($subscription['placed_on']);
                $expiryDate = strtotime("+" . $subscription['tenure'] . " years", $placedOnDate);
                $formattedExpiryDate = date("d-M-Y", $expiryDate);
                ?>
                <div class="subscription-box">
                    <div class="subscription-header">
                        <h3>Service: <?php echo $subscription['service_type']; ?></h3>
                        <span>Tenure: <?php echo $subscription['tenure']; ?> Years</span>
                    </div>
                    <div class="subscription-details">
                        <p class="info-label">Price</p>
                        <p class="info-value"><?php echo ($subscription['price'] * $subscription['tenure']); ?></p>

                        <p class="info-label">Address</p>
                        <p class="info-value"><?php echo $subscription['address']; ?></p>

                        <p class="info-label">Placed On</p>
                        <p class="info-value"><?php echo $subscription['placed_on']; ?></p>

                        <p class="info-label">Expire On</p>
                        <p class="info-value"><?php echo $formattedExpiryDate; ?></p>

                        <p class="info-label">Status</p>
                        <p class="info-value"><?php echo $subscription['status']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <br>

</body>

<style>
    .subscription-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-top: 20px;
    }

    .subscription-box {
        background-color: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 30%;
        min-width: 300px;
    }

    .subscription-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .subscription-header h3 {
        margin: 0;
        color: #d81324;
    }

    .subscription-details p {
        margin: 0;
    }

    .subscription-details p.info-label {
        font-weight: bold;
        margin-top: 0.5em; /* Adjust spacing between label and value */
    }

    .subscription-details p.info-value {
        margin: 0;
        font-size: 0.9em; /* Adjust font size for value */
    }

    .no-subscription {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .buy-button {
        display: inline-block;
        background-color: #d81324;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 20px;
        text-decoration: none;
    }

    .buy-button:hover {
        background-color: #0b2154;
    }
</style>

</html>
