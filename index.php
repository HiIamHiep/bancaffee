<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/animation.css">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="main" id="main">
        <div class="awe-section-1">
            <div class="slider">
                <div class="slides">
                    <!-- radio button start -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!-- radio button end -->

                    <!-- slider img start -->
                    <div class="slide first">
                        <img src="./assets/img/slider_1.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="./assets/img/slider_2.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="./assets/img/slider_4.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="./assets/img/slider_5.webp" alt="">
                    </div>
                    <!-- sider img end -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
        <!-- <div class="awe-section-2">
            <div class="section-product">
                <div class="product-head">
                    <h2>
                        <a href="#">
                            <strong>New arrivals</strong>
                        </a>
                    </h2>
                </div>
                <div class="product">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="">
                                <img src="./assets/img/product/cake1.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-text">
                            <div class="title-wrapper">
                                <p class="category"> ????? ??N </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuy???t</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>???</span>
                                        </bdi>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product-card-actions">
                            <input type="hidden" name="variantId">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="">
                                <img src="./assets/img/product/cake1.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-text">
                            <div class="title-wrapper">
                                <p class="category"> ????? ??N </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuy???t</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>???</span>
                                        </bdi>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product-card-actions">
                            <input type="hidden" name="variantId">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="">
                                <img src="./assets/img/product/cake1.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-text">
                            <div class="title-wrapper">
                                <p class="category"> ????? ??N </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuy???t</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>???</span>
                                        </bdi>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product-card-actions">
                            <input type="hidden" name="variantId">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="">
                                <img src="./assets/img/product/cake1.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-text">
                            <div class="title-wrapper">
                                <p class="category"> ????? ??N </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuy???t</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>???</span>
                                        </bdi>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product-card-actions">
                            <input type="hidden" name="variantId">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="button-all">
                    <a href="products.php">
                        <span>Xem t???t c???</span>
                    </a>
                </div>
            </div>
        </div> -->
        <div class="section-blogs">
            <div class="section-blog">
                <div class="section-blog-header">
                    <h2>
                        <a href="#">Tin t???c <b>h??ng h??a</b></a>
                    </h2>
                </div>
                <div class="section-blog-items">
                    <div class="section-blog-item">
                        <a href="">
                            <div class="section-blog-item-img">
                                <img src="./assets/img/Blogs/blog1.webp" alt="">
                            </div>
                            <div class="section-blog-item-title">
                                <h3>
                                    ??U ????I BLACK FRIDAY GI???M ?????N 45% CH??NH TH???C KH???I ?????NG
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>Black Friday l?? m???t trong nh???ng ch????ng tr??nh ??u ????i l???n nh???t n??m c???a Be Classy. Gi???m ?????n 45% v???i t???t c??? ...</p>
                            </div>
                        </a>
                    </div>
                    <div class="section-blog-item">
                        <a href="">
                            <div class="section-blog-item-img">
                                <img src="./assets/img/Blogs/blog2.webp" alt="">
                            </div>
                            <div class="section-blog-item-title">
                                <h3>
                                    BE CLASSY CH??NH TH???C ??P D???NG "MUA GI??Y TR?????C - TR??? SAU"
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>Fundiin l?? h??? th???ng ????n v??? tr??? g??p uy t??n h??ng ?????u Vi???t Nam. T??? h??m nay, Be Classy ch??nh th???c th??ch h???p ...</p>
                            </div>
                        </a>
                    </div>
                    <div class="section-blog-item">
                        <a href="">
                            <div class="section-blog-item-img">
                                <img src="./assets/img/Blogs/blog3.webp" alt="">
                            </div>
                            <div class="section-blog-item-title">
                                <h3>
                                    BE CLASSY CH??NH TH???C RA M???T GIBSON COLLECTION
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>GIBSON COLLECTION l?? BST ???????c ra m???t m???i ????y t???i Be Classy. L?? th??nh ph???m ???????c thi???t k??? t??? nh???ng c??u chu...</p>
                            </div>
                        </a>
                    </div>
                    <div class="section-blog-item">
                        <a href="">
                            <div class="section-blog-item-img">
                                <img src="./assets/img/Blogs/blog4.webp" alt="">
                            </div>
                            <div class="section-blog-item-title">
                                <h3>
                                    BIRTHDAY OFFER | COMBO QU?? T???NG SINH NH???T TR???N TH??NG
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>C???t m???c ????nh d???u h??nh tr??nh 5 n??m b?????c v??o th??? tr?????ng gi??y da. ????y l?? c?? h???i ????? Be Classy nh??n l???i h??nh ...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="./assets/js/main.js"></script>
</body>
</html>