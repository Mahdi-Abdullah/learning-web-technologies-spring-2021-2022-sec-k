<?php 

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['date'] == null){
			echo "Date is empty....";
		}else{
			echo 'Date : '.$_REQUEST['date'];
		}
	}
?>
