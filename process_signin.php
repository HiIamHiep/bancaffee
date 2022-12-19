<?php 
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	require 'admin/connect.php';

	if(isset($_POST['remember'])){
		$remember = true;
	} else {
		$remember = false;
	}


	// if(empty($email) || empty($password)) {
	// 	session_start();
	// 	$_SESSION['alert'] = 'Vui lòng điền đầy đủ thông tin tài khoản';
	// 	header('location:signin.php?');
	// 	exit;
	// }

	mysqli_real_escape_string($connect, $email);
	mysqli_real_escape_string($connect, $password);

	$sql = "select * from customers where email = '$email' and password = '$password'";
	$result = mysqli_query($connect, $sql);
	$number_rows = mysqli_num_rows($result);

	if($number_rows == 1) {
		session_start();
		$each = mysqli_fetch_array($result);
		$id = $each['id'];
		$_SESSION['id'] = $id;
		$_SESSION['name'] = $each['fullname'];
		if($remember) {
			$token = uniqid('user_',true);
			$sql = "update customers
			set
			token = '$token'
			where
			id = '$id'
			";
		mysqli_query($connect, $sql);
			setcookie($remember, $token, time() + 60*60*24*30);
		}
		header('location:user.php');
		exit;
	}

	session_start();
	$_SESSION['error'] = 'Sai tài khoản hoặc mật khẩu rồi';

	header('location:signin.php');

 ?>
