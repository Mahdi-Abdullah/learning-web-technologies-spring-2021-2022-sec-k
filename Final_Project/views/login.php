<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Login</title>
</head>
<body>
	<table width="1570" cellspacing="0" bgcolor="E0DDAA">
		<tr height="50px">
			<td bgcolor="" align="center">
				<b><a href="../views/homepage.php" style="text-decoration: none; font-size: 30px; font-family: calibri; color: darkred;">CarLagbe.com</a></b>
			</td>
			<td bgcolor="141E27" align="center">
				<a href="../views/newCars.php" style="text-decoration: none;"><b style="font-size: 25px; font-family: calibri; color: white;">New Cars | </b></a>
				<a href="../views/oldCars.php" style="text-decoration: none; "><b style="font-size: 25px; font-family: calibri;color: white;">Old Cars | </b></a>
				<a href="../views/loan.php" style="text-decoration: none;"><b style="font-size: 25px; font-family: calibri;color: white;">Loan | </b></a>
				<a href="../views/emi.php" style="text-decoration: none;"><b style="font-size: 25px; font-family: calibri;color: white;">EMI | </b></a>
			</td>
			<td align="right">
				| <a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Login</b></a> |
				<a href="../views/registration.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Registration</b></a> |
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="../assets/3.jpg" alt="Car Image" width="1570" height="250">
			</td>
		</tr>
		<tr height="411px" bgcolor="203239">
			<td width="270px" valign="Top">
				
			</td>
			<td bgcolor="141E27" align="center">
				<form method="POST" action="../controllers/loginCheck.php">
					<table width="400">
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 35px; font-family: calibri; color: white;">Login <br> <hr></b>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 25px; font-family: calibri; color: white;">Username:</b> <input id="name" type="text" name="username" value="" onblur="user()" /> <br>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 25px; font-family: calibri; color: white;">Password :</b> <input id="pass" type="password" name="password" value="" onblur="pass()" /> <br>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<br><input type="submit" name="submit" value="Submit" style="font-size: 20px;"> <hr>
							</td>
						</tr>
						<tr>
							<td >
								<b style="font-size: 20px; font-family: calibri; color: white;"><input type="checkbox" name="remember_me" value=""/> Remember Me </b>
							</td>
							<td align="right">
								<a href="../views/forgotPassword.php" style="text-decoration: none;"><b style="font-size: 20px; font-family: calibri; color: white;">Forgot Password?</b></a>
							</td>
						</tr>
					</table>
				</form>
			</td>
			<td  width="270px">
			</td>
		</tr>
		<tr height="200px" bgcolor="203239">
			<td></td>
			<td bgcolor="141E27"></td>
			<td></td>
		</tr>
		<tr height="40px">
			<td bgcolor="" align="left">
				<a href="../views/homepage.php" style="text-decoration: none;"><b style="font-size: 20px; font-family: calibri; color: darkred;">CarLagbe.com</b></a>
			</td>
			<td bgcolor="" align="center">
				<b style="font-size: 15px; font-family: calibri;">Copyright</b>
			</td>
			<td align="right">
					| <a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Login</b></a> |
					<a href="../views/aboutUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">About Us</b></a> |
					<a href="../views/contactUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Contact Us</b></a> |
			</td>
		</tr>
	</table>
	<script>
		function user(){
			let username = document.getElementById('name').value;
			if (username == "") {
				alert("Please enter your username");
			}
		}
		function pass(){
			/*let password = document.getElementById('pass').value;
			if (password == "") {*/
				alert("Please enter your password");
			/*}*/
		}
	</script>
</body>
</html>