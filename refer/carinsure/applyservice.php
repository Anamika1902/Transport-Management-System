<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['userid'])) {

header('location:login.php');

}

?>

<?php
if (isset($_POST['apply'])) {

    if (isset($_SESSION['userid'])) {
        $user_id = $_SESSION['userid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address1'] . ' - ' . $_POST['address2'];
        $number = $_POST['mobile'];
        $vehicle_number = $_POST['vehicle_number'];
        $vehicle_type = $_POST['vehicle_type'];
        $service_type = $_POST['service_type'];
        $tenure = $_POST['tenure'];
        $placed_on = date('d-M-y');

        $check = mysqli_query($conn, "SELECT * FROM subscription WHERE user_id='$user_id' AND service_type='$service_type' AND vehicle_number = '$vehicle_number' ") or die('check service query failed');
        $service_apply = mysqli_num_rows($check);

        if ($service_apply > 0) {
            $display_msg[] = 'You have already applied for the same service before.';
        } else {
            mysqli_query($conn, "INSERT INTO `subscription`(user_id, name, email, number, address, vehicle_number, vehicle_type, service_type, tenure, placed_on) VALUES('$user_id', '$name', '$email', '$number', '$address', '$vehicle_number', '$vehicle_type', '$service_type','$tenure', '$placed_on')") or die('insert query failed');
            $display_msg[] = 'Your service has been applied';
        }
    } else {
        $display_msg[] = 'Login to continue.';
    }
}
?>

<?php

if (isset($_GET['service'])) {
    $selectedService = $_GET['service'];
} else {
    $selectedService = '';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vehicle Apply Insurance</title>
    <link rel="icon" href="/https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <!-- display msg -->
    <?php
    if (isset($display_msg)) {
        if (is_array($display_msg)) {
            foreach ($display_msg as $msg) {
                echo '
                <div class="display_msg">
                    <span>' . $msg . '</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>
            ';
            }
        } else {
            echo '
            <div class="display_msg">
                <span>' . $display_msg . '</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
        ';
        }
    }
    ?>

    <div class="apply-form">
        <h2>Apply for Car Insurance</h2>
        <form method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Pankaj Sharma">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="krishna@example.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="address1">Address Line 1</label>
                    <input type="text" id="address1" name="address1" required placeholder="123/1, Street Name">
                </div>
                <div class="form-group">
                    <label for="address2">Address Line 2</label>
                    <input type="text" id="address2" name="address2" required placeholder="Apartment Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" id="mobile" name="mobile" required placeholder="0000000000" maxlength="10"
                        inputmode="numeric">
                </div>
                <div class="form-group">
                    <label for="vehicle">Vehicle Number</label>
                    <input type="text" id="vehicle" name="vehicle_number" required placeholder="MH12AB1234"
                        maxlength="10" oninput="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="vehicle-type">Vehicle Type</label>
                    <select id="vehicle-type" name="vehicle_type" required>
                        <option value="" disabled selected>Select Vehicle Type</option>
                        <option value="sedan">Car</option>
                        <option value="suv">Bike</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service-type">Service Type</label>
                    <select id="service-type" name="service_type" required>
                        <option value="" disabled selected>Select Service Type</option>
                        <option value="comprehensive" <?php if ($selectedService === 'comprehensive')
                            echo 'selected'; ?>>
                            Comprehensive</option>
                        <option value="liability" <?php if ($selectedService === 'liability')
                            echo 'selected'; ?>>
                            Liability Coverage</option>
                        <option value="collision" <?php if ($selectedService === 'collision')
                            echo 'selected'; ?>>
                            Collision Coverage</option>
                        <option value="injury" <?php if ($selectedService === 'injury')
                            echo 'selected'; ?>>Injury
                            Protection Coverage</option>
                        <option value="additional" <?php if ($selectedService === 'additional')
                            echo 'selected'; ?>>
                            Additional Coverage</option>
                        <option value="discount" <?php if ($selectedService === 'discount')
                            echo 'selected'; ?>>Special
                            Discount Service</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="tenure">Tenure</label>
                    <select id="tenure" name="tenure" required>
                        <option value="" disabled selected>Select Tenure</option>
                        <option value="1">1 Year</option>
                        <option value="3">3 Years</option>
                        <option value="5">5 Years</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" value="1000/- annum" name="price" readonly>
                </div>
            </div>
            <input class="apply-button" name="apply" type="submit" value="Apply">
        </form>
    </div>

    <br>

    <?php @include 'footer.php'; ?>

</body>

<style>
    .apply-form {
        max-width: 1000px;
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

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        transition: border-color 0.3s;
        padding-right: 0px;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    select:focus {
        border-color: #d81324;
    }

    .apply-button {
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

    .apply-button:hover {
        background-color: #0b2154;
    }
</style>

</html>