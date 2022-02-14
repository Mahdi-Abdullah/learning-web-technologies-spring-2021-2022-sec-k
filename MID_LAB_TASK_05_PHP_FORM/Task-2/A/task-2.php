<?php 

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['name'] == null){
			echo "email is empty....";
		}else{
			echo 'Email : '.$_REQUEST['name'];
		}
	}
?>
