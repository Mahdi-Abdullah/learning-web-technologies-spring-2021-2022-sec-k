<?php 
	require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Homepage</title>
</head>
<body>
	<table width="1570" cellspacing="0" bgcolor="E0DDAA">
		<tr height="50px">
			<td bgcolor="" align="center">
				<b><a href="../views/homepage.php" style="text-decoration: none; font-size: 30px; font-family: calibri; color: darkred;">CarLagbe.com</a></b>
			</td>
			<td bgcolor="141E27" align="center">
				<a href="../views/users.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">All Users | </b></a>
				<a href="../views/newCarsAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">New Cars | </b></a>
				<a href="../views/oldCarsAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Old Cars | </b></a>
				<a href="../views/transactions.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Transactions | </b></a>
				<a href="../views/loanAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Loan | </b></a>
				<a href="../views/emiAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">EMI | </b></a>
			</td>
			<td align="right">
				| <a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Back</b></a> |
				<a href="../views/profile_Admin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Profile</b></a> |
				<a href="../controllers/logout.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Logout</b></a> |
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="../assets/6.jpg" alt="Car Image" width="1570" height="250">
			</td>
		</tr>
		<tr height="611px" bgcolor="203239">
			<td width="270px">
				
			</td>
			<td bgcolor="141E27" valign="Top">
				<table width="710px" align="center">
					<tr>
						<td colspan="3" align="center">
							<b style="font-size: 35px; font-family: calibri; color: white;">Profile<br> <hr></b>
						</td>
					</tr>
					<tr>
						<td align="center">
							<b style="font-size: 25px; font-family: calibri; color: white;">Name</b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;">Username</b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;">Email</b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;">Password</b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;">Gender</b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;">Date of Birth</b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;">Account Type</b><br><hr>
						</td>
						<td align="center">
							<b style="font-size: 25px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][0]?></b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][1]?></b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][2]?></b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][3]?></b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][4]?></b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][5]?></b><br><hr>
							<b style="font-size: 25px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][6]?></b><br><hr>
						</td>
						<td valign="Top" align="right">
							<img src="../assets/<?=$_SESSION['current_user'][7]?>" width="200px" height="240px"><br>
							<b style="font-size: 20px; font-family: calibri; color: white;"><?=$_SESSION['current_user'][7]?></b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<br><a href="../views/EditProfile.php?id=<?=$_SESSION['current_user'][1]?>"><input type="submit" name="submit" value="Edit Profile" style="font-size: 25px;"></a>
						</td>
					</tr>
				</table>
			</td>
			<td  width="270px" valign="Top">
				
			</td>
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