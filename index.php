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
                                <p class="category"> ĐỒ ĂN </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuyết</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>₫</span>
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
                                <p class="category"> ĐỒ ĂN </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuyết</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>₫</span>
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
                                <p class="category"> ĐỒ ĂN </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuyết</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>₫</span>
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
                                <p class="category"> ĐỒ ĂN </p>
                                <p class="product-title">
                                    <a href="">Burger kem tuyết</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span>
                                    <span>
                                        <bdi>150,000<span>₫</span>
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
                        <span>Xem tất cả</span>
                    </a>
                </div>
            </div>
        </div> -->
        <div class="section-blogs">
            <div class="section-blog">
                <div class="section-blog-header">
                    <h2>
                        <a href="#">Tin tức <b>hàng hóa</b></a>
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
                                    ƯU ĐÃI BLACK FRIDAY GIẢM ĐẾN 45% CHÍNH THỨC KHỞI ĐỘNG
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>Black Friday là một trong những chương trình ưu đãi lớn nhất năm của Be Classy. Giảm đến 45% với tất cả ...</p>
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
                                    BE CLASSY CHÍNH THỨC ÁP DỤNG "MUA GIÀY TRƯỚC - TRẢ SAU"
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>Fundiin là hệ thống đơn vị trả góp uy tín hàng đầu Việt Nam. Từ hôm nay, Be Classy chính thức thích hợp ...</p>
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
                                    BE CLASSY CHÍNH THỨC RA MẮT GIBSON COLLECTION
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>GIBSON COLLECTION là BST được ra mắt mới đây tại Be Classy. Là thành phẩm được thiết kế từ những câu chu...</p>
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
                                    BIRTHDAY OFFER | COMBO QUÀ TẶNG SINH NHẬT TRỌN THÁNG
                                </h3>
                            </div>
                            <div class="section-blog-item-description">
                                <p>Cột mốc đánh dấu hành trình 5 năm bước vào thị trường giày da. Đây là cơ hội để Be Classy nhìn lại hành ...</p>
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