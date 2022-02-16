<?php 
	session_start();
	if(isset($_COOKIE['status'])){
		$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<table border="1" cellspacing="0">
		<tr>
			<td colspan="2" width="150%" align="right">
				Logged in as <?=$user['username']?> | <a href="logout.php">Logout</a>
			</td>
		</tr>
		<tr>
			<td width="40%">
				<p><b>Account</b></p><hr>
				<ul type="dot">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="viewProfile.php">View Profile</a></li>
					<li><a href="">Edit Profile</a></li>
					<li><a href="">Change Profile Picture</a></li>
					<li><a href="">Change Password</a></li>
				</ul>
			</td>
			<td>
				<fieldset>
					<legend><b>PROFILE</b></legend>
					<p> Name: <?=$user['name']?></p> <hr>
					<p> Name: <?=$user['email']?></p> <hr>
					<p> Name: <?=$user['gender']?></p> <hr>
					<p> Name: <?=$user['date']?></p> <hr>
					<p><a href="">Edit Profile</a></p>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<p> Copyright</p>
			</td>
		</tr>
	</table>
</body>
</html>

<?php
	}else{
		echo "invalid request";
	}
?>