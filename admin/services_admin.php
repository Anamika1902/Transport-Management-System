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
    <title>Services</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin_assets/css/admin.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
   <?php
   
   include('sidebar.php' );
   
   ?>

<!-- ========================= Main /form ==================== -->
<div class="section">
            <div class="topnav">
                <div class="nav_link">
                    <ion-icon name="attributes"></ion-icon>
                </div>
            </div>

            <div class="Reg">  	
		

        <div class="signup">
            <form action="../logicphp/service_logic.php" method="POST" enctype="multipart/form-data">
                <p style="color:rgb(238, 44, 44);"> </p>
                <input type="hidden" name="u_id" value="<?=$user['id'];?>">
                <label for="chk" aria-hidden="true">Add Services</label><br>
                <label>Vehicle Name :</label>
                <input type="text" name="vehicle"  value="" placeholder="Enter Vehicle Name" required=""><br>
                <label>Price: </label>
                <input type="text" name="amount"  value="" placeholder="Amount per hour" required=""><br>
                <label>Capacity :</label>
                <input type="text" name="capacity"  value="" placeholder="in tons" required=""><br>
                <label>Image:</label> 
                    <input type="file"
                            name="image"
                            value=""
                            placeholder="Enter the Image: ">
                <button name="add_service">Submit</button>
            </form>
        </div>
</div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Driver Page</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Vehicle Name</td>
                                <td>Price</td>
                                <td>Capacity</td>
                                <td>Image</td>
                                <td>Delete</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $query="SELECT * FROM services ";
                            $query_run=mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                            <tr>
                            <td id="services"><?= $row['id'];?> </td>
                                    <td id="services"><?= $row['vehicle'];?> </td>
                                    <td id="services"><?= $row['amount'];?> </td>
                                    <td id="addturf"><?= $row['capacity'];?> </td>
                                    <td id="addturf"><img id = "services" src="data:image;base64,<?= base64_encode($row['image']); ?>" alt="image" style=" paddign:0px;  max-width: 100%; height: auto;"> </td>
                                    
                                    <td id="addturf">
                                        <form action="code.php" method="POST">
                                        <button type="submit" name="service_delete" value="<?=$row['id'];?>" class="btn" >Delete</button>
                                        </form>
                                    </td>
                            </tr>
                            <?php
                            }
                        }
                        else
                        {
                        ?>
                            <tr>
                                <td id="addturf" colspan="4">No Records Found</td>
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