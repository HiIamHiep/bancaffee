<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title></title>
</head>
<body>
    <?php if(isset($_SESSION['error'])) { ?>
        <span style="color:red; font-weight:bold;">
            <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']); 
            ?>
    	</span>
    <?php } ?>
    <div class="signin">
        <div class="container sign-in-container" id="container">
            <div class="form-container">
                <form action="process_login.php" method="post" >
                    <div class="title-container mt-16">
                        <h1>Sign in</h1>
                    </div>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" name="email" />
                    <input type="password" placeholder="Password" name="password" />
                    <button type="submit" style="margin-top: 7px;">Sign In</button>
                    <a href="" >
                        <input type="checkbox" name="remember">
                    </a>
                    <a href="">Forgot your password?</a>
                </form>
                <div class="register-container">
                    <a href="./signup.php">You don't have account? Register</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>