<?php 

	session_start();
	// Trống level và hàm empty sẽ cho mặc định = 0;
	if(empty($_SESSION['level'])){
		header('location:../index.php');
	}