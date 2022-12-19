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
		if (empty($_GET['id'])) {
			header('location:index.php?error=Phải truyền mã để sửa');
		}
		include '../menu.php';
		include '../connect.php';
		$id = $_GET['id'];
		$sql = "select * from manufacturers where id = '$id'";
		$result = mysqli_query($connect, $sql);
		$each = mysqli_fetch_array($result);
	 ?>
	<div class="main_admin" id="main_id">
		<form action="process_update.php" method="post">
			<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
			Tên
			<input type="text" name="name" value="<?php echo $each['Name'] ?>">
			<br>
			Địa chỉ
			<textarea name="address" ><?php echo $each['Address']; ?></textarea>
			<br>
			Điện thoại
			<input type="text" name="phone" value="<?php echo $each['Phone'] ?>">
			<br>
			Ảnh
			<input type="text" name="photo" value="<?php echo $each['Photo'] ?>">
			<br>
			<button>Thêm</button>
		</form>
	</div>
</body>
</html>