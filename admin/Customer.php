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
                        <h2>Register User</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                               
                                <td>UserType</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Address</td>
                                <td>Number</td>
                                <td>Password</td>
                            </tr>
                        </thead>

                        <tbody>
                           <?php

                           $query="SELECT * FROM users";
                           $queryrun=mysqli_query($con,$query);


                           if(mysqli_num_rows($queryrun)>0)
                           {
                            foreach($queryrun as $row)
                            {
                               ?>
                               <tr>
                                    
                                    <td><?=$row[ 'usertype'];?></td>
                                    <td><?=$row[ 'u_name'];?></td>
                                    <td><?=$row[ 'u_email'];?></td>
                                    <td><?=$row[ 'u_address'];?></td>
                                    <td><?=$row[ 'u_number'];?></td>
                                    
                                    <td><a href= "edit-register.php?u_id=<?=$row['u_id'];?>" class="btn2" >EDIT</a> </td>
                                    <td>
                                        <form action= "code.php" method="POST">
                                        <button type="submit" name="user_delete" value="<?=$row['u_id'];?>" class="btn2" >Delete</button>    
                            </form> 
                                    </td>
                               </tr>
                               <?php
                            }
                           }
                           else{
                            ?>
                            <tr>
                                <td colspan="9">No Records Found</td>

                            </tr>
                            <?php
                           }
                           ?>
                        </tbody>
                    </table>
                </div>

             
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>