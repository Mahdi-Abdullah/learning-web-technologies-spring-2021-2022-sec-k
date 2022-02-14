<?php 

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['name'] == null){
			echo "name is empty....";
		}else{
			echo 'Name : '.$_REQUEST['name'];
		}
	}
?>
