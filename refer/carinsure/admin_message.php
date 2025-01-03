<?php
@include 'config.php';

session_start();

$admin_id = $_SESSION['adminid'];

if(!isset($admin_id)){
    header('location:login.php');
 };

$query = "SELECT * FROM contact";
$result = mysqli_query($conn, $query);
$contact = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `contact` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_message.php');
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Accounts</title>
    <link rel="icon" href="/https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php @include 'admin_header.php'; ?>

    <div class="account-container">
        <?php if (empty($contact)) : ?>
            <div class="no-account">
                <h3>No Message</h3>
                <p>There are no messages in the database.</p>
            </div>
        <?php else : ?>
            <?php foreach ($contact as $msg) : ?>
                <div class="account-box">
                    <p class="account-info">User ID: <span><?php echo $msg['id']; ?></span></p>
                    <p class="account-info">Username: <span><?php echo $msg['username']; ?></span></p>
                    <p class="account-info">Email: <span><?php echo $msg['email']; ?></span></p>
                    <p class="account-info">Message: <span class="user-type"><?php echo $msg['message']; ?></span></p>
                    <br>
                    <a href="admin_message.php?delete=<?php echo $msg['id']; ?>" onclick="return confirm('delete this user?');" class="btn">delete</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <br>

</body>

<style>
    .account-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-top: 20px;
    }

    .account-box {
        background-color: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 45%;
        min-width: 300px;
    }

    .account-box p {
        margin: 0;
        font-size: 1em;
    }

    .account-box span {
        font-weight: bold;
    }

    .account-info {
        margin: 0;
        font-size: 0.9em;
        color: #555;
    }

    .user-type {
        font-weight: bold;
        color: var(--orange);
    }
</style>

</html>
