<?php
	function Log($username, $password) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from users where username = '{$username}' and password = '{$password}'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result)) {
			return true;
		}else {
			return false;
		}
	}
	function Userinfo($username) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from users where username = '{$username}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function IsUserTaken($username) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select username from users where username = '{$username}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row == null) {
			return true;
		}else {
			return false;
		}
	}
	function Register($name, $username, $email, $password, $gender, $dob, $type, $pic, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "insert into users values('{$name}','{$username}','{$email}'),'{$password}','{$gender}','{$dob}','{$type}','{$pic}','{$status}')";

		if (mysqli_query($con, $sql)) {
			return echo 'Registration Complete';
		}else {
			return echo 'Error';
		}
	}
	function editUser($name, $username, $email, $password, $gender, $dob, $type, $pic, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "update users set name='{$name}', username='{$username}', email='{$email}', password='{$password}', gender='{$gender}', dob='{$dob}', type='{$type}', pic='{$pic}', status='{$status}'";

		if (mysqli_query($con, $sql)) {
			return echo 'Update Complete';
		}else {
			return echo 'Error';
		}
	}
	function deleteUser($username) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "delete from users where username = '{$username}'";

		if (mysqli_query($con, $sql)) {
			return echo 'Deletion Complete';
		}else {
			return echo 'Error';
		}
	}
	function  addUser($name, $username, $email, $password, $gender, $dob, $type, $pic, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "insert into users values('{$name}','{$username}','{$email}'),'{$password}','{$gender}','{$dob}','{$type}','{$pic}','{$status}')";

		if (mysqli_query($con, $sql)) {
			return echo 'Insert Complete';
		}else {
			return echo 'Error';
		}
	}
?>