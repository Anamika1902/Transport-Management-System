<?php
@include 'config.php';

session_start();

$query = "SELECT * FROM subscription";
$result = mysqli_query($conn, $query);
$subscriptions = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_POST['update_status'])) {
    $subscription_id = $_POST['subscription_id'];
    $new_status = $_POST['new_status'];

    mysqli_query($conn, "UPDATE subscription SET status = '$new_status' WHERE id = '$subscription_id'") or die('query failed');
    header('location:admin_insurance.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Subscriptions</title>
    <link rel="icon" href="/https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php @include 'admin_header.php'; ?>


    <div class="subscription-container">
        <?php if (empty($subscriptions)): ?>
            <div class="no-subscription">
                <h3>No Subscriptions</h3>
                <p>You don't have any subscriptions yet.</p>
                <a href="home.php#service" class="buy-button">Buy Subscription</a>
            </div>
        <?php else: ?>
            <?php foreach ($subscriptions as $subscription): ?>
                <?php
                $placedOnDate = strtotime($subscription['placed_on']);
                $expiryDate = strtotime("+" . $subscription['tenure'] . " years", $placedOnDate);
                $formattedExpiryDate = date("d-M-Y", $expiryDate);
                ?>
                <div class="subscription-box">
                    <div class="subscription-header">
                        <h3>Service:
                            <?php echo $subscription['service_type']; ?>
                        </h3>
                        <span>Tenure:
                            <?php echo $subscription['tenure']; ?> Years
                        </span>
                    </div>
                    <div class="subscription-details">

                        <p class="info-label">Status</p>
                        <p class="info-value">
                            <?php echo $subscription['status']; ?>
                        </p>

                        <p class="info-label">Placed On</p>
                        <p class="info-value">
                            <?php echo $subscription['placed_on']; ?>
                        </p>

                        <p class="info-label">Expiry Date</p>
                        <p class="info-value">
                            <?php echo $formattedExpiryDate; ?>
                        </p>

                        <p class="info-label">Address</p>
                        <p class="info-value">
                            <?php echo $subscription['address']; ?>
                        </p>

                        <p class="info-label">Name</p>
                        <p class="info-value">
                            <?php echo $subscription['name']; ?>
                        </p>

                        <p class="info-label">Email</p>
                        <p class="info-value">
                            <?php echo $subscription['email']; ?>
                        </p>

                        <p class="info-label">Phone Number</p>
                        <p class="info-value">
                            <?php echo $subscription['number']; ?>
                        </p>

                        <p class="info-label">User ID</p>
                        <p class="info-value">
                            <?php echo $subscription['user_id']; ?>
                        </p>
                    </div>

                    <form action="" method="post">
                        <input type="hidden" name="subscription_id" value="<?php echo $subscription['id']; ?>">
                        <select name="new_status">
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                        <input type="submit" name="update_status" class="btn" value="Update">
                    </form>
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
        width: 45%;
        min-width: 300px;
    }

    .subscription-box p {
        margin: 0;
        font-size: 1em;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        transition: border-color 0.3s;
        padding-right: 0px;

    }

    input[type="text"]:focus,
    select:focus {
        border-color: #d81324;
    }

    .subscription-box span {
        font-weight: bold;
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
        margin-top: 0.5em;
    }

    .subscription-details p.info-value {
        margin: 0;
        font-size: 0.9em;
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