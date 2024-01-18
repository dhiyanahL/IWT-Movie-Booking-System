<!--IT22055262 - LIYAUDEEN D.H -->
<?php
require 'config.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login </title>
		<link rel = "stylesheet" type = "text/css" href = "css/Login.css">
	</head>
	<body>

		<!--Login Form-->
		<div class = "page-content">

			<div class = "login_form">
				<form method = "POST" action = "Login-Process.php"> <!--Add the method and action-->
					<h1>Login</h1>
					<br><br>
					
					<div class = "input_textbox">
						<input type = "text" name = "username" id = "username" placeholder = "Username" required>
					</div>
					<br>

					<div class = "input_textbox">
						<input type = "password" name = "pw" id = "pw" placeholder = "Password" required>
						<br><br>
					</div>

					<!-- This element toggles between password visibility-->
					
					<input type = "checkbox" name = "password_visibility" class = "password_visibility" id ="password_visibility" onclick ="passwordVisibility()"> Show Password
					
					
					<br><br><br><br>

					<!--link it to the T&C page-->
					<div class = "tandc" id = "tandc">
						By continuing, you agree to BlockbusterBooker's <a href = "#">Terms & Conditions</a>
					</div>

					<br>
					<input type = "submit" name = "loginButton" class = "loginButton" value = "Login">
					<br><br><br>

					<!--link to the registration page-->
					<div class = "register"> 
						<a href = "Registration.php" class = "register" id = "register">Not registered to Blockbuster Booker ?</a>
					</div>
				</form>
			</div>
		</div>

		<script src = "Login.js"> </script>
	</body>
</html>