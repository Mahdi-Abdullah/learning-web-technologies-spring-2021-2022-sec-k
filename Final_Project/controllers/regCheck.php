<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$conPass = $_REQUEST['confirmPass'];

		if (empty($_REQUEST['gender'])) {
			echo "Gender is not selected.". "<br>";
		}else{
			$gender = $_REQUEST['gender'];
		}

		$date = $_REQUEST['date'];
		
		if ($_FILES['pic']['size'] == 0) {
			echo "Profile picture is not selected.". "<br>";
		}else{
			$src = $_FILES['pic']['tmp_name'];
			$des = "../assets/".$_FILES['pic']['name'];
			move_uploaded_file($src, $des);
		}

		if (empty($_REQUEST['accType'])) {
			echo "Account type is not selected.". "<br>";
		}else{
			$accountType = $_REQUEST['accType'];
		}

		if($name != null && $email != null && $username != null && $password != null && $conPass != null && $date != null){
			if ($password == $conPass) {
				$user = "\n".$name."|".$username."|".$email."|".$password."|".$gender."|".$date."|".$accountType."|".$_FILES['pic']['name']."|"."Active";
				$file = fopen('../models/users.txt', 'a');
				fwrite($file, $user);
				fclose($file);
				header('location: ../views/login.php');
			}else{
				echo "passwords does not match";
			}
			
		}else{
			echo "null submission";
		}
	}