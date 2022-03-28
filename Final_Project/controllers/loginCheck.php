<?php 
	session_start();
	require('../models/users_tbl.php');

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null) {
				
				if(login($username,$password) == true) {
					if (userInfo($username)['Status'] == "Active") {

						if (userInfo($username)['Account_Type'] == 'admin') {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = userInfo($username);
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Admin.php');
						}
						else if (userInfo($username)['Account_Type'] == 'customer') {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = userInfo($username);
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Customer.php');
						}
						else if (userInfo($username)['Account_Type'] == 'seller') {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = userInfo($username);
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Seller.php');
						}
						else if (userInfo($username)['Account_Type'] == 'customer service') {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = userInfo($username);
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Customer_Service.php');
						}
					}else{
						echo "Your account is blocked! or ";
					}
				}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}
?>