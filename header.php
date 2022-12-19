<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="./assets/css/animation.css">
	<title></title>
</head>
<body>
	<div class="header pl-10 pr-10">
		<div class="header-top">
			<div class="header-top-left">
				<div class="header-top-left-text">
					<span>Hotline: </span>
					<a href="">
						0982 309 550 
						<!-- SQL -->
					</a>
				</div>
			</div>
			<div class="header-top-logo">
				<img src="./assets/img/logo.webp">
			</div>
			<div class="header-top-right">
				<ul class="items">
					<?php if(empty($_SESSION['id'])) { ?>
					<li class="item"><a href="" class="nav-link">Tài khoản</a>
						<ul class="dropdown-menu">
							<li class="nav-item-lv2"><a href="signin.php" class="nav-link">Đăng nhập</a></li>
							<li class="nav-item-lv2"><a href="signup.php" class="nav-link">Đăng kí</a></li>
						</ul>
					</li>
					<?php } else { ?>
					<li class="item"><a href="" class="nav-link"><?php echo $_SESSION['name'] ?></a>
						<ul class="dropdown-menu">
							<li class="nav-item-lv2"><a href="signout.php" class="nav-link">Đăng xuất</a></li>
						</ul>
					</li>
					<?php } ?>
					<li class="item"><a href="view_cart.php" class="nav-link">Giỏ hàng<i class="fa-solid fa-cart-shopping"></i></a></li>
					<li class="item"><a href="view_cart.php" class="nav-link"><i class="fa-solid fa-magnifying-glass"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="header-navbar">
			<ul class="nav">
				<li class="nav-item"><a class="nav-link">Trang chủ</a></li>
				<li class="nav-item"><a class="nav-link">Giày tây<i class="fa-solid fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li class="nav-item-lv2"><a href="" class="nav-link">Oxford</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Loafer</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Derby</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Boots</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Sneaker- sandal</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link">Phụ kiện<i class="fa-solid fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li class="nav-item-lv2"><a href="" class="nav-link">Wallet</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Belt</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Dress Sock</a></li>
					</ul></li>
				<li class="nav-item"><a class="nav-link">Collection<i class="fa-solid fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li class="nav-item-lv2"><a href="" class="nav-link">The flex</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">The new gen</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Timeless</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Wedding shoes</a></li>
					</ul></li>
				<li class="nav-item"><a class="nav-link">Cửa hàng</a></li>
				<li class="nav-item"><a class="nav-link">Giới thiệu</a></li>
				<li class="nav-item"><a class="nav-link">Blog</a></li>
			</ul>
		</div>
		<div class="navigation-menu" id="navigation-menu">
			<ul class="nav">
				<li class="nav-item"><a class="nav-link">Trang chủ</a></li>
				<li class="nav-item"><a class="nav-link">Giày tây<i class="fa-solid fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li class="nav-item-lv2"><a href="" class="nav-link">Oxford</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Loafer</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Derby</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Boots</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Sneaker- sandal</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link">Phụ kiện<i class="fa-solid fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li class="nav-item-lv2"><a href="" class="nav-link">Wallet</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Belt</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Dress Sock</a></li>
					</ul></li>
				<li class="nav-item"><a class="nav-link">Collection<i class="fa-solid fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li class="nav-item-lv2"><a href="" class="nav-link">The flex</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">The new gen</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Timeless</a></li>
						<li class="nav-item-lv2"><a href="" class="nav-link">Wedding shoes</a></li>
					</ul></li>
				<li class="nav-item"><a class="nav-link">Cửa hàng</a></li>
				<li class="nav-item"><a class="nav-link">Giới thiệu</a></li>
				<li class="nav-item"><a class="nav-link">Blog</a></li>
			</ul>
		</div>
	</div>
</body>
</html>