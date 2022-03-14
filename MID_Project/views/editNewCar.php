<?php 
	require_once('header.php');

	$id = $_GET['id'];

	$file = fopen('../models/newCars.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[1] == $id){
			break;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Edit User</title>
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
				<a href="../controllers/oldCarsAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Old Cars | </b></a>
				<a href="../controllers/transactions.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Transactions | </b></a>
				<a href="../controllers/loanAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Loan | </b></a>
				<a href="../controllers/emiAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">EMI | </b></a>
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
		<tr height="750px" bgcolor="203239">
			<td bgcolor="141E27" valign="Top" colspan="3">
				<form method="POST" action="../controllers/updateNewCar.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?=$id?>"/>
					<table width="1050px" align="center" >
						<tr>
							<td colspan="3" align="center">
								<b style="font-size: 35px; font-family: calibri; color: white;">Edit Car<br> <hr></b>
							</td>
						</tr>
						<tr>
							<td align="center">
								<b style="font-size: 26px; font-family: calibri; color: white;">Name</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Seller</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Price</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Status</b><br><hr>
							</td>
							<td align="center">
								<input type="text" name="name" value="<?=$userArray[0]?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>
								<input type="text" name="seller" value="<?=$userArray[1]?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>
								<input type="text" name="price" value="<?=$userArray[2]?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>

								<input type="radio" name="status" value="Active"<?php if(trim($userArray[4]) == "Active") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Active</b>
								<input type="radio" name="status" value="Block"<?php if(trim($userArray[4]) == "Block") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Block</b><hr>
							</td>
							<td valign="Top" align="right">
								<img src="../assets/<?=$userArray[3]?>" width="200px" height="240px"><br>
								<b style="font-size: 20px; font-family: calibri; color: white;"><?=$userArray[3]?></b>
								<p align="right"><input type="file" name="pic" style="color: white; font-size: 12px;"></p>
								<input type="hidden" name="p" value="<?=$userArray[3]?>">
							</td>
						</tr>
						<tr>
							<td colspan="3" align="center">
								<br><input type="submit" name="update" value="Update" style="font-size: 25px;"/></a> <input type="reset" name="reset" value="Reset" style="font-size: 25px;" /> <br>
							</td>
						</tr>
					</table>
				</form>
				
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
					|<a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Login</b></a> |
					<a href="../views/aboutUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">About Us</b></a> |
					<a href="../views/contactUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Contact Us</b></a> |
			</td>
		</tr>
	</table>
</body>
</html>