<?php 

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['group'])){
			echo "Blood group unselected....";
		}else{
			echo "Blood Group : ".$_REQUEST['group'];
		}
	}
?>