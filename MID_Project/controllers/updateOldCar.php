<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$name = $_REQUEST['name'];
		$seller = $_REQUEST['seller'];
		$price = $_REQUEST['price'];
		$id = $_REQUEST['id'];
		
		if ($_FILES['pic']['size'] == 0 && $_REQUEST['p'] == "") {
			echo "Profile picture is not selected.". "<br>";
		}
		elseif ($_FILES['pic']['size'] == 0 && $_REQUEST['p'] != "") {
			$picture = $_REQUEST['p'];
		}
		else{
			$src = $_FILES['pic']['tmp_name'];
			$des = "../assets/".$_FILES['pic']['name'];
			move_uploaded_file($src, $des);
			$picture = $_FILES['pic']['name'];
		}

		if (empty($_REQUEST['status'])) {
			echo "status is not selected.". "<br>";
		}else{
			$status = $_REQUEST['status'];
		}

		if($name != null && $seller != null && $price != null){
			
			$file = fopen('../models/oldCars.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[1] == $id){
					$line = $name."|".$seller."|".$price."|".$picture."|".$status."\r\n";
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../models/oldCars.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/oldCarsAdmin.php');

		}else{
			echo "null submission";
		}
	}
?>