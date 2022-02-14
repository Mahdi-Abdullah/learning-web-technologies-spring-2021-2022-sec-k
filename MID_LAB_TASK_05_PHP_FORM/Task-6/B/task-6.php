<?php 

	$groupError = "";
	$blood = "";

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['group'])){
			$groupError = "Blood group unselected....";
		}else{
			$blood = $_REQUEST['group'];
		}
	}
?>

<html>
<head>
	<title> Task 6</title>
</head>
<body>
	<form method="POST" action="task-6.php">
		<fieldset>
			<legend><b>BLOOD GROUP</b></legend>
			<table>
				<tr>
					<td>
						 <select name="group">
							<option value="A+"> A+</option>
							<option value="A-"> A-</option>
							<option value="B+"> B+</option>
							<option value="B-"> B-</option>
							<option value="AB+"> AB+</option>
							<option value="AB-"> AB-</option>
							<option value="O+"> O+</option>
							<option value="O-"> O-</option>
						</select>
					</td>
					<td>
						<?php echo "Blood Group : ".$blood;?>
					</td>
				</tr>
				<tr>
					<td width="30%">
						<hr>
					</td>
				</tr>
				<tr>
					<td> <input type="submit" name="submit" value="Submit"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>