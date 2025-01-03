<?php
session_start();

include("../config/connection.php");


if(isset($_POST['add_service']))
{
    $vehicle=mysqli_real_escape_string($con,$_POST['vehicle']);
    $amount=mysqli_real_escape_string($con,$_POST['amount']);
    $capacity=mysqli_real_escape_string($con,$_POST['capacity']);
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $query="INSERT INTO services VALUES('','$vehicle','$amount','$capacity','$image')";
    $query_run=mysqli_query($con,$query);
        
    if($query_run=TRUE)
    {
        echo "<script>
        alert('Service Added Successfully ');
        window.location.href = '../admin/services_admin.php';
      </script>";
    }
    else
    {
        echo "<script>
        alert('Something Went Wrong. ');
        window.location.href = '../admin/services_admin.php';
      </script>";
    }
}