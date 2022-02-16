<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$conPass = $_REQUEST['confirmPass'];
		$date = $_REQUEST['date'];
		if (empty($_REQUEST['gender'])) {
			echo "Gender not selected.". "<br>";
		}else{
			$gender = $_REQUEST['gender'];
		}

		if($name != null && $email != null && $username != null && $password != null && $conPass != null && $date != null){
			if ($password == $conPass) {
				$user = ['name'=> $name, 'email'=>$email,'username'=> $username, 'password'=>$conPass, 'gender'=>$gender, 'date'=>$date];
				$_SESSION['user'] = $user;
				header('location: login.php');
			}else{
				echo "passwords does not match";
			}
		}else{
			echo "null submission";
		}
	}
?>