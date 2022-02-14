<?php

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['Degree'])){
			echo "Degree is unchecked....";
		}else{
			echo "Degrees: ";
			foreach ($_REQUEST['Degree'] as $degree) {
				echo $degree.", ";
			}
		}
	}
?>


<html>
<head>
	<title> Task 5</title>
</head>
<body>
	<form method="POST" action="task-5.php">
		<fieldset>
			<legend><b>Degree</b></legend>
			<table>
				<tr>
					<td>
						
						<input type="checkbox" name="Degree[]" value="SSC" <?php foreach ($_REQUEST['Degree'] as $degree) { if ($degree == "SSC") {echo "checked";}}?>/> SSC
						<input type="checkbox" name="Degree[]" value="HSC" <?php foreach ($_REQUEST['Degree'] as $degree) { if ($degree == "HSC") {echo "checked";}}?>/> HSC
						<input type="checkbox" name="Degree[]" value="BSc" <?php foreach ($_REQUEST['Degree'] as $degree) { if ($degree == "BSc") {echo "checked";}}?>/> BSc
						<input type="checkbox" name="Degree[]" value="MSc"<?php foreach ($_REQUEST['Degree'] as $degree) { if ($degree == "MSc") {echo "checked";}}?>/> MSc
					</td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td> <input type="submit" name="submit" value="Submit"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<hr>
</body>
</html>