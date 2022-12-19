<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title></title>
</head>
<body>
	<div class="menu">
		<div class="admin_navbar" id="admin_navbar">
	        <div class="admin_navbar-left">
	            <ul class="items">
	                <li class="item"><a onclick="showSidebar()"><i class="fa-solid fa-bars"></i></a></li>
	                <li class="item"><a href="../root/index.php">Home</a></li>
	                <li class="item"><a href="">Contact</a></li>
	            </ul>
	        </div>
	        <div class="admin_navbar-right">
	            <ul class="items">
	                <li class="item"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
	                <li class="item"><a href=""><i class="fa-solid fa-message"></i></a></li>
	                <li class="item"><a href=""><i class="fa-solid fa-bell"></i></a></li>
	            </ul>
	        </div>
	    </div>
	    <div class="sidebar" id="sidebar">
	        <div class="sidebar_logo">
	            <img src="" alt="">NameWeb
	            <div class="sidebar_close">
	                <a onclick="hiddenSidebar()"><i class="fa-solid fa-angles-left"></i></a>
	            </div>
	        </div>
	        
	        <div class="sidebar_user-name">
	            <div class="item_img">
	                <img src="https://i.pinimg.com/474x/b5/d9/13/b5d9139abf053059040b1908894848df.jpg" alt="">
	            </div>
	            <div class="item_description">
	                <h2><?php echo $_SESSION['name'] ?></h2>
	                <span>
	                	<?php if ($_SESSION['level'] == 1)  {
	                		echo "SuperAdmin";
	                	} else {
	                		echo "Admin";
	                	} ?>
	                </span>
	            </div>
	        </div>
	        <ul class="items">
	            <li class="item"><a href="../manufacturers">Quản lí nhà sản xuất</a></li>
	            <li class="item"><a href="../products">Quản lí sản phẩm</a></li>
	            <li class="item"><a href="../orders" href="">Quản lí đơn hàng</a></li>
	        </ul>
	    </div>
	</div>
	
    <script>
        function hiddenSidebar() {
            document.getElementById("sidebar").style.display = "none";
            document.getElementById("admin_navbar").style.width = "100%";
            document.getElementById("main_admin").style.marginLeft = "0";
        }

        function showSidebar() {
            document.getElementById("sidebar").style.display = "block";
            document.getElementById("admin_navbar").style.width = "80%";
            document.getElementById("main_admin").style.marginLeft = "20%";

        }
    </script>
	<?php if(isset($_SESSION['error_manufacturer'])) { ?>
        <span style="color:red; font-weight:bold;">
            <?php
                echo $_SESSION['error_manufacturer'];
                unset($_SESSION['error_manufacturer']); 
            ?>
    </span>
    <?php } ?>
    <?php if(isset($_SESSION['success_manufacturer'])) { ?>
        <span style="color:green; font-weight:bold;">
            <?php
                echo $_SESSION['success_manufacturer'];
                unset($_SESSION['success_manufacturer']); 
            ?>
    </span>
    <?php } ?>
</body>
</html>