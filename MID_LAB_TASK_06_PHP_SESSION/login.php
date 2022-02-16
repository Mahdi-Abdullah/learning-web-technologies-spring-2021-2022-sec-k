<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
</head>
<body>
	<p> <a href="Public_Home.php">Home</a> | <a href="login.php">Login</a> | <a href="Registration.php"> Registration</a></p>
	<form method="POST" action="loginCheck.php">
		<fieldset>
			<legend><b>LOGIN</b></legend>
			User Name : <input type="text" name="username" value=""/> <br><hr>
			Password : <input type="password" name="password" value=""/> <br><hr>
			<input type="checkbox" name="remember_me" value=""/> Remember Me <br>
			<p><input type="submit" name="submit" value="Submit"><a href="forgot_Passworld.php"> Forgot Password?</a></p>
		</fieldset>
	</form>
	<p> Copyright</p>
</body>
</html>