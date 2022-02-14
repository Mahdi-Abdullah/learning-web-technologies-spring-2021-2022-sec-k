<?php 

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['gender'])){
			echo "gender is unchecked....";
		}else{
			echo "Gender : ".$_REQUEST['gender'];
		}
	}
?>
