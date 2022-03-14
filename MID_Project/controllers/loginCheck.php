<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){

			$file = fopen('../models/users.txt', 'r');
			while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				
				if(trim($userArry[1]) == $username && trim($userArry[3]) == $password){
					if (trim($userArry[8]) == "Active") {
						if (trim($userArry[6] == 'admin')) {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = $userArry;
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Admin.php');
						}
						else if (trim($userArry[6] == 'customer')) {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = $userArry;
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Customer.php');
						}
						else if (trim($userArry[6] == 'seller')) {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = $userArry;
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Seller.php');
						}
						else if (trim($userArry[6] == 'customer service')) {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = $userArry;
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Customer_Service.php');
						}
					}else{
						echo "Your account is blocked! or ";
						break;
					}
				}
			}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}
?>