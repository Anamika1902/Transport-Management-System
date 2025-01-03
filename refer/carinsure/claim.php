<?php

@include 'config.php';

session_start();

if (isset($_POST['submit_claim'])) {
    if (isset($_SESSION['userid'])) {
        $user_id = $_SESSION['userid'];
        $service_type = $_POST['service_type'];
        $claim_description = $_POST['claim_description'];
        $claim_date = date('d-M-Y');

        mysqli_query($conn, "INSERT INTO `claims`(user_id, service_type, claim_description, claim_date) VALUES('$user_id', '$service_type', '$claim_description', '$claim_date')") or die('insert query failed');
        $display_msg = 'Your claim has been submitted.';
    } else {
        $display_msg = 'Login to continue.';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Submit Claim</title>
    <link rel="icon" href="/https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php @include 'header.php'; ?>

    <div class="claim-form">
        <h2>Submit Insurance Claim</h2>

        
        <?php if (isset($display_msg)): ?>
            <div class="display_msg">
                <span>
                    <?php echo $display_msg; ?>
                </span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <label for="service_type">Service Type</label>
                <select id="service-type" name="service_type" required>
                    <option value="" disabled selected>Select Service Type</option>
                    <option value="comprehensive">
                        Comprehensive</option>
                    <option value="liability">
                        Liability Coverage</option>
                    <option value="collision">
                        Collision Coverage</option>
                    <option value="injury">Injury
                        Protection Coverage</option>
                    <option value="additional">
                        Additional Coverage</option>
                    <option value="discount">Special
                        Discount Service</option>
                </select>
            </div>
            <div class="form-group">
                <label for="claim_description">Claim Description</label>
                <textarea id="claim_description" name="claim_description" rows="4" style="padding-right:0"
                    required></textarea>
            </div>
            <input class="claim-button" name="submit_claim" type="submit" value="Submit Claim">
        </form>
    </div>

    <br>

    <?php @include 'footer.php'; ?>
</body>

<style>
    .claim-form {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    h2 {
        text-align: center;
        color: #d81324;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
        color: #333;
    }

    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }

    select:focus,
    textarea:focus {
        border-color: #d81324;
    }

    .claim-button {
        display: inline-block;
        background-color: #d81324;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 20px;
        width: 100%;
        text-align: center;
    }

    .claim-button:hover {
        background-color: #0b2154;
    }
</style>

</html>