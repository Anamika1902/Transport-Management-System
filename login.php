<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

	<title>Login Page</title>
	

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
					<input type="email" name="u_email" placeholder="Email" required="">
					<input type="password" name="u_password" placeholder="Password" required="">
					
					<button name="login" >Login</button>
					</form>
					<a href="driverlogin.php">Login as Driver</a>
                    <a href="signup.php">Sign Up</a>
				
			</div>
	</div>
</body>
<style>
	/* Add some styles to the body and container */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.Reg {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Style the login form */
.signup {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  width: 300px;
}

/* Style the form elements */
label {
  font-weight: bold;
  font-size: 18px;
  color: #333;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[name="login"] {
  background-color: #007BFF;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[name="login"]:hover {
  background-color: #0056b3;
}

/* Style the links */
a {
  text-decoration: none;
  color: #007BFF;
  margin: 10px;
  display: block;
}

a:hover {
  text-decoration: underline;
}

</style>

</html>
</body>
</html>
