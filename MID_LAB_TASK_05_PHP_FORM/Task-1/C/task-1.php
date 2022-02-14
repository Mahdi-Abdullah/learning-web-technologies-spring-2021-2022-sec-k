<?php 

	$ameError = "";
	$name = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['name'] == null){
			$nameError = "name is empty....";
		}else{
			$name = $_REQUEST['name'];
		}
	}
?>

<html>
<head>
	<title> Task 1</title>
</head>
<body>
	<form method="POST" action="task-1.php">
		<fieldset>
			<legend> <b>Name</b></legend>
			<table>
				<tr>
					<td>
						<input type="text" name="name" value="<?=$name?>"/>
						<?php echo 'Name: '.$name ?>
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