<?php 

	$dateError = "";
	$date = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['date'] == null){
			$dateError = "Date is empty....";
		}else{
			$date = $_REQUEST['date'];
		}
	}
?>

<html>
<head>
	<title> Task 3</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> Date of Birth</legend>
			<table>
				<tr>
					<td>
						<input type="date" name="date" value="<?=$date?>"/>
						<?php echo 'Date: '.$date ?>
					</td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<hr>
</body>
</html>