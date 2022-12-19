<?php session_start(); ?>
<head>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<style type="text/css">
	.tung_san_pham {
		width: 33%;
		float: left;
		border: 1px solid black;
		height: 330px;
	}
</style>
</head>

<?php 
	require 'admin/connect.php';
	$sql = "select * from products ";
	$result = mysqli_query($connect, $sql);
 ?>
 <?php include 'header.php' ?>
 <div class="giua">
 	<?php foreach ($result as $each): ?>
	 	<div class="tung_san_pham">
            <h1><?php echo $each['name'] ?></h1>
            <img src="admin/products/photos/<?php echo $each['photo'] ?>" height="100">
            <p><?php echo $each['price'] ?></p>
            <a href="product.php?id= <?php echo $each['id'] ?>">
                Xem chi tiết >>
            </a>
            <?php if (!empty($_SESSION['id'])) {?>
                <br>
            <a href="add_to_cart.php?id= <?php echo $each['id'] ?>">
                Thêm vào giỏ hàng
            </a>
            <?php } ?>
        </div>
 	<?php endforeach ?>
 </div>
 	<?php include 'footer.php' ?>
