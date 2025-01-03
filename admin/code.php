<?php
session_start();

include("../config/connection.php");

if(isset($_POST['user_delete']))
{
   $user_id=$_POST['user_delete'];
   $query="DELETE FROM users WHERE u_id='$user_id' ";
   $query_run=mysqli_query($con,$query);

   if($query_run)
    {
        echo "<script>
          alert('Deleted Successfully ');
          window.location.href = 'Customer.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Something Went Wrong. ');
        window.location.href = 'Customer.php';
      </script>";
    }

}

if(isset($_POST['update_user']))
{
    $user_id=$_POST['user_id'];
    $Name=$_POST['u_name'];
    $Email=$_POST['u_email'];
    $Address=$_POST['u_address'];
    $Number=$_POST['u_number'];
    $usertype=$_POST['usertype'];

    $query="UPDATE users SET u_name='$Name',u_email='$Email',u_address='$Address',u_number='$Number',usertype='$usertype'
              WHERE u_id='$user_id' ";
    $query_run=mysqli_query($con,$query);
    if($query_run=TRUE)
    {
        echo "<script>
          alert('Updated Successfully ');
          window.location.href = 'Customer.php';
        </script>";
    }
    else
    {
        echo "<script>
          alert('Something Went Wrong. ');
          window.location.href = 'Customer.php';
        </script>";
    }
}
//DRIVER DELETE
if(isset($_POST['driver_delete']))
{
    $user_id=$_POST['user_id'];
    $Name=$_POST['u_name'];
    $Email=$_POST['u_email'];
    $Address=$_POST['u_address'];
    $Number=$_POST['u_number'];
    $usertype=$_POST['usertype'];

    $driver_id=$_POST['driver_delete'];
    $query="DELETE FROM driver WHERE driver_id='$driver_id' ";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        echo "<script>
        alert('Deleted Successfully ');
        window.location.href = 'driver.php';
      </script>";
    }
    else
    {
        echo "<script>
        alert('Something Went Wrong. ');
        window.location.href = 'driver.php';
      </script>";
    }


}

if(isset($_POST['update_driver']))
{
    $driver_id=$_POST['driver_id'];
    $Name=$_POST['d_name'];
    $Email=$_POST['d_email'];
    $Address=$_POST['d_address'];
    $Number=$_POST['d_number'];
    $Vehicle=$_POST['d_vehicle'];
    $usertype=$_POST['usertype'];

    $query="UPDATE driver SET d_name='$Name',d_email='$Email',d_address='$Address',d_number='$Number',d_vehicle='$Vehicle',usertype='$usertype'
              WHERE driver_id='$driver_id' ";
    $query_run=mysqli_query($con,$query);
    if($query_run=TRUE)
    {
        echo "<script>
        alert('Updated Successfully ');
        window.location.href = 'driver.php';
      </script>";
    }
    else
    {
        echo "<script>
        alert('Something Went Wrong.');
        window.location.href = 'driver.php';
      </script>";
    }
}

if(isset($_POST['service_delete']))
{
    $user_id=$_POST['service_delete'];
    $query="DELETE FROM services WHERE id='$user_id' ";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        echo "<script>
          alert('Deleted Successfully ');
          window.location.href = 'service_admin.php';
        </script>";

       
    }
    else
    {
        echo "<script>
        alert('Something Went Wrong. ');
        window.location.href = 'service_admin.php';
      </script>";
    }


}

