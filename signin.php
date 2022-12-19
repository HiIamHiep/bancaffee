<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title></title>
</head>
<body>
    <?php if(isset($_SESSION['alert'])) { ?>
        <span style="color:green; font-weight:bold;">
            <?php
                echo $_SESSION['alert'];
                unset($_SESSION['alert']); 
            ?>
    </span>
    <?php } ?>
    <?php if(isset($_SESSION['error'])) { ?>
        <span style="color:red; font-weight:bold;">
            <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']); 
            ?>
    </span>
    <?php } ?>
    <?php if(isset($_SESSION['success'])) { ?>
        <span style="color:green; font-weight:bold;">
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']); 
            ?>
    </span>
    <?php } ?>
    <?php 
        if (isset($_COOKIE['remember'])) {
            $token = $_COOKIE['remember'];
            require 'admin/connect.php';
            $sql = "select * from customers where token = '$token' limit 1";
            $result = mysqli_query($connect, $sql);
            $number_rows = mysqli_num_rows($result);
            if($number_rows == 1) {
                $each = mysqli_fetch_array($result);
                $_SESSION['id'] = $each['id'];
                $_SESSION['name'] = $each['fullname'];
            }
        }
     ?>

    <?php 
        if(isset($_SESSION['id'])) {
            header('location:user.php');
            exit;
        }
     ?>
    <div class="signin">
        <div class="container sign-in-container" id="container">
            <div class="form-container">
                <form action="process_signin.php" method="post" >
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