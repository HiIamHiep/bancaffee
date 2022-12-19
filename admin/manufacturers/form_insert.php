<?php 
	require '../check_super_admin_login.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		include '../menu.php'
	 ?>
	 <div class="main_admin" id="main_id">
		<form action="process_insert.php" method="post" enctype="multipart/form-data">
			Tên
			<input type="text" name="name">
			<br>
			Địa chỉ
			<textarea name="address"></textarea>
			<br>
			Điện thoại
			<input type="text" name="phone">
			<br>
			Ảnh
			<input type="file" name="photo">
			<br>
			<button>Thêm</button>
		</form>
	 </div>
</body>
</html>