<?php
	require '../check_super_admin_login.php';

	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$photo = $_FILES['photo'];

	if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_FILES['photo'])){
		session_start();
		$_SESSION['error_manufacturer'] = 'phải điền đầy đủ thông tin';
		header('location:form_insert.php');
	}

	$folder = 'photos/';
	
	$file_extension = explode('.', $photo['name'])[1]; 
	$file_name = time() . '.' . $file_extension;
	$path_file = $folder . $file_name;

	move_uploaded_file($photo['tmp_name'], $path_file);

	require '../connect.php';
	// câu lệnh sql
	$sql = "insert into manufacturers(Name, Address, Phone, Photo)
	values ('$name','$address','$phone', '$file_name')";

	// chạy câu lệnh

	mysqli_query($connect, $sql);	
	mysqli_close($connect);
	session_start();
	$_SESSION['success_manufacturer'] = 'Thêm thành công';

	header('location:index.php');
?>