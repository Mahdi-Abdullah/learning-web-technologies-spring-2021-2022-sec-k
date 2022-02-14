<?php 

	$genderError = "";
	$gender = "";

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['gender'])){
			$genderError = "gender is unchecked....";
		}else{
			$gender = $_REQUEST['gender'];
		}
	}
?>

<html>
<head>
	<title> Task 4</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend><b>GENDER</b></legend>
			<table>
				<tr>
					<td>
						<input type="radio" name="gender" value="Male"/> Male
						<input type="radio" name="gender" value="Female"/> Female
						<input type="radio" name="gender" value="Other"/> Other
					</td>
					<td>
						<?php echo "Gender : ".$gender ?>
					</td>
				</tr>
				<tr>
					<td><hr></td>
				</tr>
				<tr>
					<td> <input type="submit" name="submit" value="Submit"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>