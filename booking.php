<?php
session_start();
include("config/connection.php");





if(isset($_SESSION["auth"]))
{
    if($_SESSION["auth_usertype"]=="user")
    {

    }
    else{
        echo "You cannot access this page.";
    }
}
else
{
    header("Location: login.php");   
    exit(0);

}

?>
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


<div class="booking-box">

<form action="logicphp/booking_logic.php" method="POST">
<input type="hidden" name="id" value="<?=$row['id']?>"></input>    <!----service id--->
<?php
if(isset($_POST["book_now"]))
{
    $truckid=$_POST["book_now"];
    $query="SELECT * FROM services WHERE id ='$truckid'";
    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run))
    {
        foreach($query_run as $row)
        {
?>

            <input type="hidden" name="id" value="<?=$row['id']?>"></input>
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="vehicleName"> Vehicle Name</label>
                    <input type="text"
                            id="v_name"
                            name="vehicle"
                            value="<?=$row['vehicle']?>" readonly/>
                </div>
                <div class="user-input-box">
                    <label for="price"> Amount</label>
                    <input type="text"
                            id="price"
                            name="amont"
                            value="<?=$row['amount']?>" readonly/>
                </div>
                <div class="user-input-box">
                    <label for="capacity"> Capacity </label>
                    <input type="text"
                            id="capacity"
                            name="capacity"
                            value="<?=$row['capacity']?>" readonly/>
                </div>
                <div class="user-input-box">
                    <label for="date"> Date </label>
                    <input type="date"
                            id="date"
                            name="date" />
                </div>
                <div class="user-input-box">
                    <label for="time"> Time </label>
                    <input type="time"
                            id="time"
                            name="time" />
                </div>
                
            </div>
            <div class="payment">
            <label for="email"> Payment Mode: </label>
            <select name="payment" id="payment">
                <option value="upi">UPI</option>
                <option value="cash">Cash</option>
                <option value="card">Card</option>
            </select>

            </div>
            <div class="form-submit-btn">
                <input type="submit"  name="bookingLogicbtn" value="BOOK NOW">
            </div>
            
    <?php
}
}
}
    
    ?>
    </form>

</div>
</body>
</html>