<!DOCTYPE html>
<html>
<head>
	<title> Registration</title>
</head>
<body>
	<p> <a href="Public_Home.php">Home</a> | <a href="login.php">Login</a> | <a href="Registration.php"> Registration</a></p>
	<form method="POST" action="regCheck.php">
		<fieldset>
			<legend><b>REGISTRATION</b></legend>
			Name : <input type="text" name="name" value=""/> <br><hr>
			Email : <input type="email" name="email" value=""/> <br><hr>
			User Name : <input type="text" name="username" value=""/> <br><hr>
			Password : <input type="password" name="password" value=""/> <br><hr>
			Confirm Password : <input type="password" name="confirmPass" value=""/> <br><hr>
			<fieldset>
				<legend>Gender</legend>
				<input type="radio" name="gender" value="Male"/> Male
				<input type="radio" name="gender" value="Female"/> Female
				<input type="radio" name="gender" value="Other"/> Other
			</fieldset>
			<hr>
			<fieldset>
				<legend>Date of Birth</legend>
				<input type="date" name="date" value=""/>
			</fieldset>
			<hr>
			<input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"/>
		</fieldset>
	</form>
	<p> Copyright</p>
</body>
</html>