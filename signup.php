<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

	<title>Registration Page</title>
	<link rel="stylesheet" href="assets/css/signup.css">

</head>
<body>
<?php
include('assets/navbar.php');
?>
	<div class="Reg">  	
		

			<div class="signup">

				<form method="POST" action="logicphp/signup_logic.php">
					<p style="color:rgb(238, 44, 44);">
                        
            
                </p>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="u_name" placeholder="Username" required="">
					<input type="email" name="u_email" placeholder="Email" required="">
					<input type="text" name="u_address" placeholder="Address" required="">
					<input type="text" name="u_number" placeholder="Phone No." required="">
					<input type="password" name="u_password" placeholder="Password" required="">
					<input type="password" name="confirm_password" placeholder="Confirm Password" required="">
					<button name="register">Register</button>
				</form>
			</div>
			
	</div>
	<p class="para-2">Already have an account?<a href="login.php">Login here </a></p>
</body>
</html>
</body>
</html>
