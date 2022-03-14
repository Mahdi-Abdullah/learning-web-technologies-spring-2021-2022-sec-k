<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$id = $_REQUEST['id'];

		if (empty($_REQUEST['gender'])) {
			echo "Gender is not selected.". "<br>";
		}else{
			$gender = $_REQUEST['gender'];
		}

		$date = $_REQUEST['date'];
		
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

		if (empty($_REQUEST['accType'])) {
			echo "Account type is not selected.". "<br>";
		}else{
			$accountType = $_REQUEST['accType'];
		}

		if($name != null && $email != null && $username != null && $password != null && $date != null){
			
			$file = fopen('../models/users.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[1] == $id){
					$line = $name."|".$username."|".$email."|".$password."|".$gender."|".$date."|".$accountType."|".$picture."\n";
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../models/users.txt', 'w');
			fwrite($file, $updatedContent);
			session_start();
			setcookie('status', 'true', time()-10, '/');
			header('location: ../views/login.php');

		}else{
			echo "null submission";
		}
	}
?>