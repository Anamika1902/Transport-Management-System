<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

	<title>Driver Signup</title>
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
					<label for="chk" aria-hidden="true"> Driver Sign up</label>
					<input type="text" name="d_name" placeholder="Name" required="">
					<input type="email" name="d_email" placeholder="Email" required="">
					<input type="text" name="d_address" placeholder="Address" required="">
					<input type="text" name="d_number" placeholder="Phone No." required="">
                    <input type="text" name="d_vehicle" placeholder="Vehicle " required="">
					<input type="password" name="d_password" placeholder="Password" required="">
					<input type="password" name="d_confirm_password" placeholder="Confirm Password" required="">
					<button name="driver_register">Register</button>
				</form>
			</div>
	</div>
</body>
</html>
</body>
</html>
