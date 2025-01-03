<?php 
session_start();?>
<?php
include("../config/connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers  Feedback</title>
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
                        <h2>Contact Request </h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Number</td>
                                <td>Message</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        $query="SELECT * FROM contact";
                        $queryrun=mysqli_query($con,$query);

                        if(mysqli_num_rows($queryrun)>0)
                        {
                            foreach($queryrun as $row)
                            {
                                ?>
                                <tr>
                                    <td id="contact"><?= $row['con_id'];?> </td>
                                    <td id="contact"><?= $row['name'];?> </td>
                                    <td id="contact"><?= $row['email'];?> </td>
                                    <td id="contact" ><?= $row['number'];?> </td>
                                    <td id="contact"><?= $row['message'];?> </td>        
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                        ?>
                            <tr>
                                <td colspan="6">No Records Found</td>
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