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
			<td bgcolor="141E27"></td>
			<td align="right">
					| <a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Login</b></a> |
					<a href="../views/registration.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Registration</b></a> |
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="../assets/5.jpg" alt="Car Image" width="1570" height="250">
			</td>
		</tr>
		<tr height="411px" bgcolor="203239">
			<td width="270px" valign="Top">
				
			</td>
			<td bgcolor="141E27" align="center">
				<form method="POST" action="../controllers/regCheck.php" enctype="multipart/form-data">
					<table width="500">
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 35px; font-family: calibri; color: white;">Registration<br> <hr></b>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Name :</b>
							</td>
							<td>
								<input type="text" name="name" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Email :</b>
							</td>
							<td>
								<input type="email" name="email" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Username :</b>
							</td>
							<td>
								<input type="text" name="username" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Password :</b>
							</td>
							<td>
								<input type="password" name="password" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Confirm Password :</b>
							</td>
							<td>
								<input type="password" name="confirmPass" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Gender :</b>
							</td>
							<td>
								<input type="radio" name="gender" value="Male"/> <b style="font-size: 25px; font-family: calibri; color: white;">Male</b>
								<input type="radio" name="gender" value="Female"/> <b style="font-size: 25px; font-family: calibri; color: white;">Female</b>
								<input type="radio" name="gender" value="Other"/> <b style="font-size: 25px; font-family: calibri; color: white;">Other</b>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Date of Birth :</b>
							</td>
							<td>
								<input type="date" name="date" value=""/>
							</td>
						</tr>
						<tr>
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Profile Picture :</b>
							</td>
							<td align="right">
								<input type="file" name="pic" style="color: white;">
							</td>
						</tr>
						<tr>
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Account Type :</b>
							</td>
							<td>
								<input type="radio" name="accType" value="customer"/> <b style="font-size: 25px; font-family: calibri; color: white;">Customer</b>
								<input type="radio" name="accType" value="seller"/> <b style="font-size: 25px; font-family: calibri; color: white;">Seller</b>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<br><input type="submit" name="submit" value="Submit" style="font-size: 20px;"> <input type="reset" name="reset" value="Reset" style="font-size: 20px;" /> <br><hr>
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
</body>
</html>