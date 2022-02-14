<?php 

	$emailError = "";
	$email = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['name'] == null){
			$emailError = "email is empty....";
		}else{
			$email = $_REQUEST['name'];
		}
	}
?>

<html>
<head>
	<title> Task 2</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>EMAIL</b></legend>
			<table>
				<tr>
					<td>
						<input type="text" name="name" value="<?=$email?>"/>
						<?php echo 'Email: '.$email ?>
					</td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
					
				</tr>
				<tr>
					<td> <input type="submit" name="submit" value="Submit"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<hr>
</body>
</html>