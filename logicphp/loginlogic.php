<!-- <?php
    // include("../config/connection.php");
			
    //   if(isset($_POST["login"]))
    // {
    //     $Useremail= mysqli_real_escape_string($con,$_POST["u_email"]);
    //     $Password = mysqli_real_escape_string($con,$_POST["u_password"]);
    //     $result =  "SELECT * FROM users WHERE u_email= '$Useremail' LIMIT 1";
    //     $login_query_run= mysqli_query($con,$result);

    //     if(mysqli_num_rows($login_query_run) > 0)
    //     {
    //         foreach($login_query_run as $data)
    //         {
    //           $user_id = $data['u_id'];
    //           $usertype = $data['usertype'];
    //           $username = $data['u_name'];
    //           $useremail = $data['u_email'];
    //           $userpassword = $data['u_password'];
              
    //         }
    //         $_SESSION["auth"] = true;
    //         $_SESSION["auth_usertype"]= "$usertype";
    //         $_SESSION["auth_user"] = [
    //           "id"=>$user_id,
    //          "username"=>$username,
    //           "useremail"=>$useremail,
    //         ];
    //         if($_SESSION["auth_usertype"] == 'user')
    //         {
    //           #echo "<script> alert('You are Logged In'); </script>";
    //           if(isset($_SESSION["auth_user"]))
    //           {
    //             header("Location: ../index.php");
               
    //           }
    //         else
    //         {
    //             header("Location: ../login.php");

               
    //         }
    //         }
            
    //         elseif($_SESSION["auth_usertype"]=='admin')
    //         {
    //           echo "<script> alert('Welcome to admin panel'); </script>";
    //           header("Location: ../admin/admin_dashboard.php");
    //           exit(0);
    //         }
          
            
    //     }

    //     else
    //     {
    //     # $_SESSION['message'] = 'Invalid username or Password';
    //      #echo "<script> alert('Invalid username or Password'); </script>";  
    //        header("Location: ../login.php");
    //        exit(0);
    //     }     


    // }
    // else
    // {
    //     header("Location: ../login.php");
    // }



?> -->
<?php
    session_start(); // Start the session if not already started.
    include("../config/connection.php");

    if (isset($_POST["login"])) {
        $Useremail = mysqli_real_escape_string($con, $_POST["u_email"]);
        $Password = mysqli_real_escape_string($con, $_POST["u_password"]);
        $result = "SELECT * FROM users WHERE u_email = '$Useremail' LIMIT 1";
        $login_query_run = mysqli_query($con, $result);

        if (mysqli_num_rows($login_query_run) > 0) {
            $data = mysqli_fetch_assoc($login_query_run);
            $user_id = $data['u_id'];
            $usertype = $data['usertype'];
            $username = $data['u_name'];
            $useremail = $data['u_email'];
            $userpassword = $data['u_password'];

            $_SESSION["auth"] = true;
            $_SESSION["auth_usertype"] = $usertype;
            $_SESSION["auth_user"] = [
                "id" => $user_id,
                "username" => $username,
                "useremail" => $useremail,
            ];

            if ($_SESSION["auth_usertype"] == 'user') {
                header("Location: ../index.php");
                exit();
            } elseif ($_SESSION["auth_usertype"] == 'admin') {
                echo "<script> alert('Welcome to admin panel'); </script>";
                header("Location: ../admin/admin_dashboard.php");
                exit();
            }
        } else {
            header("Location: ../login.php");
            exit();
        }
    } else {
        header("Location: ../login.php");
        exit();
    }
?>



<!-- 
   DRIVER LOGIN LOGIC
-->
<?php


if(isset($_POST["d_login"]))
{
    $Useremail= mysqli_real_escape_string($con,$_POST["d_email"]);
    $Password = mysqli_real_escape_string($con,$_POST["d_password"]);
    $result =  "SELECT * FROM driver WHERE d_email= '$Useremail' LIMIT 1";
    $login_query_run= mysqli_query($con,$result);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data)
        {
          $user_id = $data['driver_id'];
          $usertype = $data['usertype'];
          $username = $data['d_name'];
          $useremail = $data['d_email'];
          $userpassword = $data['d_password'];
          
        }
        $_SESSION["auth"] = true;
        $_SESSION["auth_usertype"]= "$usertype";
        $_SESSION["auth_user"] = [
          "id"=>$user_id,
         "username"=>$username,
          "useremail"=>$useremail,
        ];
        if($_SESSION["auth_usertype"] == 'driver')
        {
          #echo "<script> alert('You are Logged In'); </script>";
          if(isset($_SESSION["auth_user"]))
          {
            header("Location: ../admin/driver_booked_detail.php");
           
          }
        else
        {
            header("Location: ../driverlogin.php");

           
        }
        }
        
      
      
        
    }

    else
    {
    # $_SESSION['message'] = 'Invalid username or Password';
     #echo "<script> alert('Invalid username or Password'); </script>";  
       header("Location: ../driverlogin.php");
       exit(0);
    }     


}
else
{
    header("Location: ../driverlogin.php");
}



?>
