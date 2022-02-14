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
