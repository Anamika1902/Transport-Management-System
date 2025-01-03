<?php
@include 'config.php';

session_start();

$query = "SELECT * FROM claims";
$result = mysqli_query($conn, $query);
$claims = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['update_status'])) {
    $claim_id = $_POST['claim_id'];
    $new_status = $_POST['new_status'];

    mysqli_query($conn, "UPDATE claims SET status = '$new_status' WHERE id = '$claim_id'") or die('query failed');
    header('location:admin_claims.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Claims</title>
    <link rel="icon" href="/https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php @include 'admin_header.php'; ?>

    <div class="claim-container">
        <?php if (empty($claims)): ?>
            <div class="no-claim">
                <h3>No Claims</h3>
                <p>There are no claims yet.</p>
            </div>
        <?php else: ?>
            <?php foreach ($claims as $claim): ?>
                <div class="claim-box">
                    <div class="claim-header">
                        <h3>Service:
                            <?php echo $claim['service_type']; ?>
                        </h3>

                        <h3>Status:
                            <?php echo $claim['status']; ?>
                        </h3>
                    </div>
                    <div class="claim-details">
                        <p class="info-label">Claim ID</p>
                        <p class="info-value">
                            <?php echo $claim['id']; ?>
                        </p>

                        <p class="info-label">User ID</p>
                        <p class="info-value">
                            <?php echo $claim['user_id']; ?>
                        </p>

                        <p class="info-label">Claim Description</p>
                        <p class="info-value">
                            <?php echo $claim['claim_description']; ?>
                        </p>

                        <p class="info-label">Claim Date</p>
                        <p class="info-value">
                            <?php echo $claim['claim_date']; ?>
                        </p>

                        
                    </div>

                    <form action="" method="post">
                        <input type="hidden" name="claim_id" value="<?php echo $claim['id']; ?>">
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
    .claim-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-top: 20px;
    }

    .claim-box {
        background-color: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 45%;
        min-width: 300px;
    }

    .claim-box p {
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

    .claim-box span {
        font-weight: bold;
    }

    .claim-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .claim-header h3 {
        margin: 0;
        color: #d81324;
    }

    .claim-details p {
        margin: 0;
    }

    .claim-details p.info-label {
        font-weight: bold;
        margin-top: 0.5em;
    }

    .claim-details p.info-value {
        margin: 0;
        font-size: 0.9em;
    }

    .no-claim {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .btn {
        display: inline-block;
        background-color: #d81324;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 10px;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #0b2154;
    }
</style>

</html>
