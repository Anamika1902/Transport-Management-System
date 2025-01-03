<?php
session_start();
if(isset($_SESSION["auth"]))
{
    if($_SESSION["auth_usertype"]=="user")
    {

    }
    else
    {
        echo "You cannot access this page.";
    }
}
else
{
    header("Location: ../index.php");
    exit(0);

}


include("config/connection.php");
    if(isset($_POST["bookingLogicbtn"]))
    {
        $truckid=mysqli_real_escape_string($con,$_POST["id"]);
        $userid=$_SESSION["auth_user"]['u_id'];
        $driverid=$_SESSION["auth_user"]['driver_id'];
        $username=$_SESSION["auth_user"]['u_name'];
        $date=mysqli_real_escape_string($con,$_POST["date"]);
        $time=mysqli_real_escape_string($con,$_POST["time"]);
        $payment=mysqli_real_escape_string($con,$_POST["payment"]);

            $query="INSERT INTO `booking`(`book_id`, `u_id`, `driver_id`, `u_name`, `date`, `time`,  'id',`payment`) VALUES ('','$userid', '$driverid','$username','$date','$time',' $truckid','$payment')";
                $query_run=mysqli_query($con,$query);
        
                if($query_run)
                {
                    echo "<script>
                    alert('Booked Successfully ');
                    window.location.href =  '../booking.php';
                  </script>";
                }
                else
                {
                    echo "<script>
                    alert('Something Went Wrong!! ');
                    window.location.href = '../booking.php';
                  </script>";
                }
    }
?>
