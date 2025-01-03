<?php
    include("../config/connection.php");
    if(isset($_POST["register"]))
    {
        $UserName=mysqli_real_escape_string($con,$_POST["u_name"]);
        $Email=mysqli_real_escape_string($con,$_POST["u_email"]);
        $Address=mysqli_real_escape_string($con,$_POST["u_address"]);
        $Number=mysqli_real_escape_string($con,$_POST["u_number"]);
        $Password=mysqli_real_escape_string($con,$_POST["u_password"]);
        $CnPassword=mysqli_real_escape_string($con,$_POST["confirm_password"]);
        
        if($CnPassword==$Password)
        {
            $Email_check="SELECT u_email FROM users WHERE u_email='$Email'";
            $Email_check_run=mysqli_query($con,$Email_check);

            if(mysqli_num_rows($Email_check_run)>0)
            {
                echo "<script>
          alert('Email ID already exists');
          window.location.href = '../signup.php';
        </script>";
            }
            else
            {

                $query="INSERT INTO users VALUES('','user','$UserName','$Email','$Address','$Number','$Password')";
                $query_run=mysqli_query($con,$query);
        
                if($query_run)
                {
                    echo "<script>
                    alert('You are registered successfully!!');
                    window.location.href = '../login.php';
                  </script>";
                    
                }
                else
                {
                    echo "<script>
                    alert('Something Went Wrong!!!!!');
                    window.location.href = '../signup.php';
                  </script>";
                   
                }
            }
        }
        else
        {
            echo "<script>
            alert('Password and Confirm Password doesn't match !!!!!');
            window.location.href = '../signup.php';
          </script>";
            

        }
    }

//DRiver Sign Up logic
    if(isset($_POST["driver_register"]))
    {
        $UserName=mysqli_real_escape_string($con,$_POST["d_name"]);
        $Email=mysqli_real_escape_string($con,$_POST["d_email"]);
        $Address=mysqli_real_escape_string($con,$_POST["d_address"]);
        $Number=mysqli_real_escape_string($con,$_POST["d_number"]);
        $Vehicle=mysqli_real_escape_string($con,$_POST["d_vehicle"]);
        $Password=mysqli_real_escape_string($con,$_POST["d_password"]);
        $CnPassword=mysqli_real_escape_string($con,$_POST["d_confirm_password"]);
        
        if($CnPassword==$Password)
        {
            $Email_check="SELECT d_email FROM driver WHERE d_email='$Email'";
            $Email_check_run=mysqli_query($con,$Email_check);

            if(mysqli_num_rows($Email_check_run)>0)
            {
                echo "<script>
          alert('Email ID already exists');
          window.location.href = '../signup_d.php';
        </script>";
            }
            else
            {

                $query="INSERT INTO driver VALUES('','driver','$UserName','$Email','$Address','$Number', '$Vehicle ','$Password')";
                $query_run=mysqli_query($con,$query);
        
                if($query_run)
                {
                    echo "<script>
                    alert('You are registered successfully!!');
                    window.location.href = '../driverlogin.php';
                  </script>";
                    
                }
                else
                {
                    echo "<script>
                    alert('Something Went Wrong!!!!!');
                    window.location.href = '../signup_d.php';
                  </script>";
                   
                }
            }
        }
        else
        {
            echo "<script>
            alert('Password and Confirm Password doesn't match !!!!!');
            window.location.href = '../signup_d.php';
          </script>";
            

        }
    }

?>
