<?php
session_start();
include("../config/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin_assets/css/admin.css">

</head>

<body>
    <!-- =============== Navigation ================ -->
   <?php
   
   include('sidebar.php' );
   
   ?>

<!-- ========================= Main ==================== -->
<div class="section">
            <div class="topnav">
                <div class="nav_link">
                    <ion-icon name="attributes"></ion-icon>
                </div>
            </div>



            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Edit Driver</h2>


                <?php
                    if(isset($_GET['driver_id'])) {
                        $driver_id = $_GET['driver_id'];
                        $user = "SELECT * FROM driver Where driver_id=$driver_id ";
                        $user_run=mysqli_query($con,$user);
                        if(mysqli_num_rows($user_run)>0){
                            foreach($user_run as $user_details){
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="driver_id"  value="<?=$user_details['driver_id'];?>">
                        <div class="main-user-info">
                            <div class="user-input-box">
                                        <label for="DriverName"  >Driver Name</label>
                                        <input type="text" 
                                                id="name"
                                                name="d_name" 
                                                value="<?=$user_details['d_name'];?>" 
                                                placeholder="Enter Driver's Name:">
                            </div> 
                            <div class="user-input-box">
                                        <label for="DriverEmail">Driver's Email</label>
                                        <input type="text" 
                                                id="email"
                                                name="d_email" 
                                                value="<?=$user_details['d_email'];?>" 
                                                placeholder="Enter Driver's Email:">
                            </div> 

                            <div class="user-input-box">
                                        <label for="DriverAddress">Driver's Address</label>
                                        <input type="text" 
                                                id="address"
                                                name="d_address" 
                                                value="<?=$user_details['d_address'];?>" 
                                                placeholder="Enter Driver's Address:">
                            </div> 
                            <div class="user-input-box">
                                        <label for="DriverNumber">Driver's Number</label>
                                        <input type="text" 
                                                id="number"
                                                name="d_number" 
                                                value="<?=$user_details['d_number'];?>" 
                                                placeholder="Enter Driver's Number:">
                            </div> 
                            <div class="user-input-box">
                                        <label for="DriverVehicle">Driver's Vehicle</label>
                                        <input type="text" 
                                                id="number"
                                                name="d_vehicle" 
                                                value="<?=$user_details['d_vehicle'];?>" 
                                                placeholder="Enter Driver's Vehicl:">
                            </div> 
                            <div class="gender-details -box">
                                <span class="genfer-title" >UserTYpe</span>
                                <div class="gender-category">
                                <input type="radio" name="usertype"  value="driver">
                                        <label>User</label> 
                                        <input type="radio" name="usertype"  value="admin">
                                        <label>Admin</label> 
                                        
                                </div>
                                       
                            </div> 
                            <div class="form-submit-btn">
                                <input type= "submit" name="update_driver" value="Edit">   
                            </div>
                        </div>
                            </form>  
                            <?php
                            }
                        } 
                        else{
                                ?>
                                    <h4>No Record Found</h4>
                                    <?php

                       }
                    }
                    ?>
                    </div>
                    </div>
                </div>
                
</div>
                </body>
                </html>


