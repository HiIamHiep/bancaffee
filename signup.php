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
    <title>Document</title>
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
        
    <div class="signup">
        <div class="container sign-up-container" id="container">
            <div class="form-container">
                <form action="process_signup.php" method="post">
                    <div class="title-container">
                        <h1>Sign Up</h1>
                    </div>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" name="name" />
                    <input type="email" placeholder="Email" name="email" />
                    <input type="password" placeholder="Password" name="password" />
                    <input type="text" name="phone_number" placeholder="phone_number">
                    <input type="text" name="address" placeholder="address">
                    <button>Sign Up</button>
                </form>
                <div class="back-sign-in-container">
                    <a href="signin.php">You have account? Sign in</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>