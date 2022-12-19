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
	 	require '../menu.php';
	 	require '../connect.php';
	 	$sql = "select * from manufacturers";
	 	$result = mysqli_query($connect, $sql);
	  ?>
	
	<div class="main_admin" id="main_admin">
		<a href="form_insert.php">
			Thêm
		</a>
		<table border="1" width="100%">
	  	<tr>
	  		<th>Mã</th>
	  		<th>Tên</th>
	  		<th>Địa chỉ</th>
	  		<th>Điện thoại</th>
	  		<th>Ảnh</th>
	  		<th>Sửa</th>
	  		<th>Xóa</th>
	  	</tr>
		  	<?php foreach ($result as $each): ?>
		  		<tr>
		  			<td><?php echo $each['id'] ?></td>
		  			<td><?php echo $each['name'] ?></td>
		  			<td><?php echo $each['address'] ?></td>
		  			<td><?php echo $each['phone'] ?></td>
		  			<td>
		  				<img width="100" height="100" src="photos/<?php echo $each['photo']; ?>">
		  			</td>
		  			<td>
		  				<a href="form_update.php?id=<?php echo $each['id']; ?>">
		  					Sửa
		  				</a>
		  			</td>
		  			<td>
		  				<a href="delete.php?id=<?php echo $each['id']; ?>">
		  					Xóa
		  				</a>
		  			</td>
		  		</tr>
		  	<?php endforeach ?>
	  	</table>  	
	</div>
</body>
</html>