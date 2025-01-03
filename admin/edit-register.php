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
                        <h2>Edit User</h2>


                <?php
                    if(isset($_GET['u_id'])) {
                        $user_id = $_GET[ 'u_id'];
                        $user = "SELECT * FROM users Where u_id='$user_id' ";
                        $user_run=mysqli_query($con,$user);
                        if(mysqli_num_rows($user_run)>0){
                            foreach($user_run as $user){
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="user_id"  value="<?=$user['u_id'];?>">
                                    <div class="main-user-info">
                                    <div class="user-input-box">
                                        <label for="UserName"  >UserName</label>
                                        <input type="text" 
                                                id="name"
                                                name="u_name" 
                                                value="<?=$user['u_name'];?>" 
                                                placeholder="Enter The Name:">
                            </div> 
                            <div class="user-input-box">
                                        <label for="UserEmail"  >Email</label>
                                        <input type="text" 
                                                id="email"
                                                name="u_email" 
                                                value="<?=$user['u_email'];?>" 
                                                placeholder="Enter The Email:">
                            </div> 

                            <div class="user-input-box">
                                        <label for="UserAddress"  >Address</label>
                                        <input type="text" 
                                                id="address"
                                                name="u_address" 
                                                value="<?=$user['u_address'];?>" 
                                                placeholder="Enter The Address:">
                            </div> 
                            <div class="user-input-box">
                                        <label for="UserNumber"  >User Number</label>
                                        <input type="text" 
                                                id="number"
                                                name="u_number" 
                                                value="<?=$user['u_number'];?>" 
                                                placeholder="Enter The Number:">
                            </div> 
                            <div class="gender-details -box">
                                <span class="genfer-title" >UserTYpe</span>
                                <div class="gender-category">
                                <input type="radio" name="usertype"  value="user">
                                        <label>User</label> 
                                        <input type="radio" name="usertype"  value="admin">
                                        <label>Admin</label> 
                                        
                                </div>
                                       
                            </div> 
                            <div class="form-submit-btn">
                                <input type= "submit" name="update_user" value="Edit">   
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
                </main>
                </div>
                </body>
                </html>


