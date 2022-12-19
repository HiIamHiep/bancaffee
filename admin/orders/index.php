<?php 
	require '../check_admin_login.php';
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
		$sql = "select orders.* , customers.fullname, customers.phone_number, customers.address from orders join customers on customers.id = orders.customer_id";
		$result = mysqli_query($connect, $sql);
	 ?>
	<div class="main_admin" id="main_admin">
		<table border="1" width="100%">
	 	<tr>
	 		<th>Mã</th>
		 	<th>Thời gian đặt</th>
		 	<th>Thông tin người nhận</th>
		 	<th>Thông tin người đặt</th>
		 	<th>Trạng thái</th>
		 	<th>Tổng tiền</th>
		 	<th>Xem</th>
		 	<th>Duyệt</th>
	 	</tr>
	 	<?php foreach ($result as $each) {?>
	 		<tr>
	 			<td><?php echo $each['id'] ?></td>
	 			<td><?php echo $each['created_at'] ?></td>
	 			<td>
	 				<?php echo $each['name_receiver'] ?><br>
	 				<?php echo $each['phone_receiver'] ?><br>
	 				<?php echo $each['address_receiver'] ?><br>
	 			</td>
	 			<td>
	 				<?php echo $each['fullname'] ?><br>
	 				<?php echo $each['phone_number'] ?><br>
	 				<?php echo $each['address'] ?><br>
	 			</td>
	 			<td>
	 				<?php 
	 					switch ($each['status']) {
	 						case '0':
	 							echo "Mới đặt";
	 							break;
	 						case '1':
	 							echo "Đã duyệt";
	 							break;
	 						case '2':
	 							echo "Đã hủy";
	 							break;
	 					}
	 				?>
	 			</td>
	 			<td>
	 				<?php echo $each['total_price'] ?>
	 			</td>
	 			<td>
	 				<a href="detail.php?id=<?php echo $each['id'] ?>">
	 					Xem
	 				</a>
	 			</td>
	 			<td>
	 				<?php if($each['status'] == 0) { ?>
	 					<a href="update.php?id=<?php echo $each['id'] ?>&status=1">
	 						Duyệt
	 					</a>
	 					<br>
	 				<?php } else { ?>
		 				<a href="update.php?id=<?php echo $each['id'] ?>&status=0">
		 					Hủy
		 				</a>
		 			<?php } ?>
	 			</td>
	 		</tr>
	 	<?php } ?>
	 </table>
	</div>
</body>
</html>