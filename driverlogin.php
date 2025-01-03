<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

	<title>Driver Login Page</title>
	<link rel="stylesheet" href="assets/css/signup.css">

</head>
<body>
<?php
include('assets/navbar.php');
?>
	<div class="Reg">  	
		

			<div class="signup">
				<form method="POST" action="logicphp/loginlogic.php">
					<p style="color:rgb(238, 44, 44);"></p>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="d_email" placeholder="Email" required="">
					<input type="password" name="d_password" placeholder="Password" required="">
					
					<button name="d_login">Login</button>
                    <a href="signup_d.php">Sign Up</a>
				</form>
			</div>
	</div>
</body>
</html>
</body>
</html>
