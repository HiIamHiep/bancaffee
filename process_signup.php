<?php 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];

	require 'admin/connect.php';
	$sql = "select count(*) from customers where email = '$email'";
	$result = mysqli_query($connect, $sql);
	$number_rows = mysqli_fetch_array($result)['count(*)'];

	if($number_rows == 1) {
		session_start();
		$_SESSION['error'] = 'Lỗi đăng kí vì đã có email rồi';
		header('location:signup.php');
		exit;
	}

	$sql = "insert into customers(fullname, email, password, phone_number, address) values ('$name','$email','$password','$phone_number','$address')";
	mysqli_query($connect, $sql);

	session_start();
	$_SESSION['success'] = 'Đăng kí thành công';
	
	mysqli_close($connect);


	header('location:signin.php');