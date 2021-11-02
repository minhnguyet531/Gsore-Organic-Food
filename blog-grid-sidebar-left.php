<?php
    ob_start();
    session_start();
    include("config.php");
    $cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
    $wishlist = (isset($_SESSION["wishlist"]))?$_SESSION["wishlist"] : [];
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Gsore | Grocery and Organic Food Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    
    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="assets/css/plugin/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugin/jquery.lineProgressbar.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Thư viện này để hiển thị đc modal tương úng với masanpham -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        <!--  Start Large Header Section   -->
        <div class="header d-none d-lg-block" id="header">

            <!-- Start Header Center area -->
            <div class="header__center sticky-header p-tb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <!-- Start Logo -->
                            <div class="header__logo">
                                <a href="index.php" class="header__logo-link img-responsive">
                                    <img class="header__logo-img img-fluid" src="assets/img/logo/logo.png" alt="">
                                </a>
                            </div> <!-- End Logo -->
                             <!-- Start Header Menu -->
                             <div class="header-menu">
                                <nav>
                                    <ul class="header__nav">
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="index.php" class="header__nav-link">Trang chủ</a>
                                        </li> <!-- End Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="shop.php" class="header__nav-link">Cửa hàng</a>
                                            <span class="menu-label menu-label--red">New</span>
                                        </li> <!-- Start Single Nav link-->
            
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="blog-grid-sidebar-left.php" class="header__nav-link">Tin tức</a>
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Giới thiệu <i class="fal fa-chevron-down"></i></a>
                                            <span class="menu-label menu-label--blue">New</span>
                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">
                                            <li class="dropdown__list"><a href="about.php" class="dropdown__link">Về chúng tôi</a></li>
                                                <li class="dropdown__list"><a href="privacy-policy.php" class="dropdown__link">Chính sách bảo mật</a></li>
                                                <li class="dropdown__list"><a href="return-and-refund-policy.php" class="dropdown__link">Đổi trả & hoàn tiền</a></li>
                                                <li class="dropdown__list"><a href="shipping-policy.php" class="dropdown__link">Giao hàng & vận chuyển</a></li>
                                                <li class="dropdown__list"><a href="frequently-questions.php" class="dropdown__link">Câu hỏi thường gặp</a></li>
                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li> <!-- End Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                                <a href="contact.php" class="header__nav-link">Liên hệ</a>
                                        </li> <!-- End Single Nav link-->
                                    </ul>
                                </nav>
                            </div> <!-- End Header Menu -->
                            <!-- Start Wishlist-AddCart -->
                            <ul class="header__user-action-icon">
                                <!-- Start Header Wishlist Box -->
                                <li>
                                    <a href="my-account.php">
                                        <i class="icon-users"></i>
                                    </a>
                                </li> <!-- End Header Wishlist Box -->
                                <!-- Start Header Wishlist Box -->
                                <li>
                                    <a href="wishlist.php">
                                        <i class="icon-heart"></i>
                                        <span class="item-count pos-absolute">
                                        <?php 
                                                $i=0;
                                                foreach($wishlist as $value){
                                                    $i++;
                                                }
                                                echo $i;
                                            ?>

                                        </span>
                                    </a>
                                </li> <!-- End Header Wishlist Box -->
                                <!-- Start Header Add Cart Box -->
                                <li>
                                    <a href="view-cart.php">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="wishlist-item-count pos-absolute">
                                            <?php 
                                                $i=0;
                                                foreach($cart as $value){
                                                    $i++;
                                                }
                                                echo $i;
                                            ?>
                                
                                        </span>
                                    </a>
                                </li> <!-- End Header Add Cart Box -->
                            </ul> 
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Center area -->

             <!-- Start Header bottom area -->
             <div class="header__bottom p-tb-30">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-menu-vertical pos-relative">
                                <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>DANH MỤC</h4>
                                <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="search.php?q=">Tìm kiếm sản phẩm</a></li>
                                    <li class="menu-item"><a href="shop.php">Gian hàng</a></li>
                                    <li class="menu-item"><a href="shipping-policy.php"> Giao hàng và vận chuyển</a></li>
                                    <li class="menu-item"><a href="return-and-refund-policy.php">Đổi trả và hoàn tiền</a></li>
                                    <li class="menu-item"><a href="frequently-questions.php">Trợ giúp và câu hỏi thường gặp</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <form class="header-search" action="search.php" method="get">
                                <div class="header-search__content pos-relative">
                                    <input type="search"  name="q" placeholder="Tìm kiếm sản phẩm tại cửa hàng" required>
                                    <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-phone text-end"><i class="icon-phone">+84 9999 9999</i></div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header bottom area -->
            
        </div> <!--  End Large Header Section  -->

        <!--  Start Mobile Header Section   -->
        <div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="index.php" class="header__mobile-logo-link">
                                        <img src="assets/img/logo/logo.png" alt="" class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Start User Action -->
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end"> 
                            <!-- Start Header Add Cart Box -->
                            <li>
                                <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="wishlist-item-count pos-absolute">3</span>
                                </a>
                            </li> <!-- End Header Add Cart Box -->
                            <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a></li>

                        </ul>   <!-- End User Action -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="header-menu-vertical pos-relative m-t-30">
                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>DANH MỤC</h4>
                                <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="search.php?q=">Tìm kiếm sản phẩm</a></li>
                                    <li class="menu-item"><a href="shop.php">Gian hàng</a></li>
                                    <li class="menu-item"><a href="shipping-policy.php"> Giao hàng và vận chuyển</a></li>
                                    <li class="menu-item"><a href="return-and-refund-policy.php">Đổi trả và hoàn tiền</a></li>
                                    <li class="menu-item"><a href="frequently-questions.php">Trợ giúp và câu hỏi thường gặp</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            
            <div class="offcanvas-inner">
                
                 <!-- Start Mobile User Action -->
                <ul class="header__user-action-icon m-tb-15 text-center">
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="my-account.php">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                   
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="view-cart.php">
                            <i class="icon-shopping-cart"></i>
                            <span class="wishlist-item-count pos-absolute">
                                <?php 
                                    $i=0;
                                    foreach($cart as $value){
                                        $i++;
                                    }
                                    echo $i;
                                ?>
                            </span>
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul>  <!-- End Mobile User Action -->
                <div class="offcanvas-menu">
                    <ul>
                        <li><a href="index.php"><span>Trang chủ</span></a></li>
                        <li>
                            <a href="shop.php"><span>Cửa hàng</span></a>
                            <a href="blog-grid-sidebar-left.php"><span>Tin tức</span></a>
                        </li>
                        <li>
                            <a href="#"><span>Giới thiệu</span></a>
                            <ul class="sub-menu">
                            <li class="dropdown__list"><a href="about.php" class="dropdown__link">Về chúng tôi</a></li>
                                <li class="dropdown__list"><a href="privacy-policy.php" class="dropdown__link">Chính sách bảo mật</a></li>
                                <li class="dropdown__list"><a href="return-and-refund-policy.php" class="dropdown__link">Đổi trả & hoàn tiền</a></li>
                                <li class="dropdown__list"><a href="shipping-policy.php" class="dropdown__link">Giao hàng & vận chuyển</a></li>
                                <li class="dropdown__list"><a href="frequently-questions.php" class="dropdown__link">Câu hỏi thường gặp</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <ul class="offcanvas__social-nav m-t-50">
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-youtube"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div> <!--  End Mobile-offcanvas Menu Section   -->

        <div class="offcanvas-overlay"></div>
    </header>  <!-- :::::: End Header Section ::::::  -->  

        <!--  Start Mobile Header Section   -->
        <div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="index.php" class="header__mobile-logo-link">
                                        <img src="assets/img/logo/logo.png" alt="" class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Start User Action -->
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end"> 
                            <!-- Start Header Add Cart Box -->
                            <li>
                                <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="wishlist-item-count pos-absolute">3</span>
                                </a>
                            </li> <!-- End Header Add Cart Box -->
                            <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a></li>

                        </ul>   <!-- End User Action -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="header-menu-vertical pos-relative m-t-30">
                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>CATEGORIES</h4>
                            <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="#">Search Terms</a></li>
                                <li class="menu-item"><a href="#">Advanced Search</a></li>
                                <li class="menu-item"><a href="#">Helps & Faqs</a></li>
                                <li class="menu-item"><a href="#">Store Location</a></li>
                                <li class="menu-item"><a href="#"> Orders & Returns</a></li>
                                <li class="menu-item"><a href="#"> Deliveries</a></li>
                                <li class="menu-item"><a href="#"> Refund & Returns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            
            <div class="offcanvas-inner">
                <ul class="user-set-role d-flex justify-content-between m-tb-15">
                    <li class="user-currency pos-relative">
                        <a class="user-set-role__button" href="#" data-bs-toggle="dropdown" aria-expanded="false">Select Language<i class="fal fa-chevron-down"></i></a>
                        <ul class="expand-dropdown-menu dropdown-menu" >
                            <li><a href="#"><img src="assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                            <li><a href="#"><img src="assets/img/icon/flag/icon_france.png" alt="">French</a></li>
                        </ul>
                    </li>
                    <li class="user-info pos-relative">
                        <a class="user-set-role__button" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Select Currency <i class="fal fa-chevron-down"></i></a>
                        <ul class="expand-dropdown-menu dropdown-menu" >
                            <li><a href="#">USD</a></li>
                            <li><a href="#">POUND</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="header-search m-tb-15" action="#" method="post">
                    <div class="header-search__content pos-relative">
                        <input type="search" name="header-search" placeholder="Search our store" required>
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                 <!-- Start Mobile User Action -->
                <ul class="header__user-action-icon m-tb-15 text-center">
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="my-account.php">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="wishlist.php">
                            <i class="icon-heart"></i>
                            <span class="item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="view-cart.php">
                            <i class="icon-shopping-cart"></i>
                            <span class="wishlist-item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul>  <!-- End Mobile User Action -->
                <div class="offcanvas-menu">
                    <ul>
                        <li><a href="index.php"><span>Home</span></a></li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-sidebar-grid-left.php">Grid Left Sidebar</a></li>
                                        <li><a href="shop-sidebar-grid-right.php">Grid Right Sidebar</a></li>
                                        <li><a href="shop-sidebar-full-width.php">Full Width</a></li>
                                        <li><a href="shop-sidebar-left-list-view.php">List Left Sidebar</a></li>
                                        <li><a href="shop-sidebar-right-list-view.php">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="view-cart.php">Cart</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="compare.php">Compare</a></li>
                                        <li><a href="empty-cart.php">Empty Cart</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="my-account.php">My Account</a></li>
                                        <li><a href="login.php">Login</a></li>
                                                        
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-single-default.php">Simple</a></li>
                                        <li><a href="product-single-affiliate.php">Affiliate</a></li>
                                        <li><a href="product-single-group.php">Grouped</a></li>
                                        <li><a href="product-single-variable.php">Variable</a></li>
                                        <li><a href="product-single-tab-left.php">Left Tab</a></li>
                                        <li><a href="product-single-tab-right.php">Right Tab</a></li>
                                        <li><a href="product-single-slider.php">Single Slider</a></li>
                                        <li><a href="product-single-gallery-left.php">Gallery Left</a></li>
                                        <li><a href="product-single-gallery-right.php">Gallery Right</a></li>
                                        <li><a href="product-single-sticky-left.php">Sticky Left</a></li>
                                        <li><a href="product-single-sticky-right.php">Sticky Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-sidebar-left.php"> Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-sidebar-right.php"> Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-list-sidebar-left.php"> Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-sidebar-right.php"> Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-single-sidebar-left.php"> Blog Single Left Sidebar</a></li>
                                        <li><a href="blog-single-sidebar-right.php"> Blog Single Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="frequently-questions.php">Frequently Questions</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="404.php">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <ul class="offcanvas__social-nav m-t-50">
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-youtube"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div> <!--  End Mobile-offcanvas Menu Section   -->

        <!--  Start Popup Add Cart  -->
        <div  id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Cart</span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            <!-- Start Add Cart Item Box-->
            <ul class="offcanvas-add-cart__menu">
                <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                    <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">
                        <div class="offcanvas-add-cart__img-box pos-relative">
                            <a href="product-single-default.php" class="offcanvas-add-cart__img-link img-responsive"><img src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="" class="add-cart__img"></a>
                            <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
                        </div>
                        <div class="offcanvas-add-cart__detail">
                            <a href="product-single-default.php" class="offcanvas-add-cart__link">Lucky Wooden Elephant</a>
                            <span class="offcanvas-add-cart__price">$29.00</span>
                            <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>
                        </div>
                    </div>
                    <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                </li> <!-- Start Single Add Cart Item-->
                <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between">
                    <div class="offcanvas-add-cart__content d-flex  align-items-start m-r-10">
                        <div class="offcanvas-add-cart__img-box pos-relative">
                            <a href="product-single-default.php" class="offcanvas-add-cart__img-link img-responsive"><img src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="" class="add-cart__img"></a>
                            <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
                        </div>
                        <div class="offcanvas-add-cart__detail">
                            <a href="product-single-default.php" class="offcanvas-add-cart__link">Lucky Wooden Elephant</a>
                            <span class="offcanvas-add-cart__price">$29.00</span>
                            <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>
                        </div>
                    </div>
                    <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                </li> <!-- Start Single Add Cart Item-->
            </ul> <!-- Start Add Cart Item Box-->
            <!-- Start Add Cart Checkout Box-->
            <div class="offcanvas-add-cart__checkout-box-bottom">
                <!-- Start offcanvas Add Cart Checkout Info-->
                <ul class="offcanvas-add-cart__checkout-info">
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Subtotal</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$60.59</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Shipping</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$7.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Taxes</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$0.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Total</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$67.59</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                </ul> <!-- End offcanvas Add Cart Checkout Info-->

                <div class="offcanvas-add-cart__btn-checkout">
                    <a href="checkout.php" class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Checkout</a>
                </div>
            </div> <!-- End Add Cart Checkout Box-->
        </div> <!-- End Popup Add Cart -->

        <div class="offcanvas-overlay"></div>
    </header>  <!-- :::::: End Header Section ::::::  --> 

    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="index.php">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tin tức</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widgets -->
                <div class="col-lg-3">
                    <div class="position-sticky">
                        <!-- Start Single Sidebar Widget - Custom Menu -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">DANH MỤC KHÁCH HÀNG</h5>
                            </div>
                            <ul class="sidebar__menu">
                                <li><a href="search.php">Tìm kiếm</a></li>
                                <li><a href="view-cart.php">Đặt hàng</a></li>
                                <li><a href="shipping-policy.php">Vận chuyển</a></li>
                                <li><a href="return-and-refund-policy.php">Đổi trả</a></li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Custom Menu -->

                        <!-- Start Single Sidebar Widget - Recent Post -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">SẢN PHẨM LIÊN QUAN</h5>
                            </div>
                            <ul class="sidebar__post-blog list-space--small">
                                <li class="d-flex align-items-center ">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Tăng cường trí tuệ với trứng</span>
                                        <a class="link--gray" href="product-single-default.php">Xem sản phẩm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Rau tăng cường hệ tiêu hóa </span>
                                        <a class="link--gray" href="product-single-default.php">Xem sản phẩm</a>
                                    </div>
                                </li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Recent Post  -->

                        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                         <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->
                        
                    </div>
                </div>  <!-- End Left Sidebar  Widgets-->
                  
                <!-- Start Rightside - Blog Grid Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog Grid -->
                  <?php
                  include("config.php");
                  $sql = "
                          SELECT * 
                          from tintuc
                          order by matintuc desc
                        ";
                  $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);
                  
                  while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
                  ;?>
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img"><a href="blog_processing.php?id=<?php echo $row["matintuc"];?>"><img src="<?php echo 'assets/img/blog/feed/'.$row["anhminhhoa"]?>" alt=""></a></div>
                                        <div class="blog__content">
                                        <a href="blog_processing.php?id=<?php echo $row["matintuc"];?>"><h3 class="blog__title m-t-25"><?php echo "<br>".$row["tieude"];?></h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i><?php echo $row["ngaydang"] ;?></a>
                                            <a class="link--gray link--icon-left"><i class="far fa-user"></i><?php echo $row["nguoidang"];?></a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                <?php echo "<br>".$row["mota"];?>
                                            </p>
                                        </div>
                                        <a class="btn btn--radius btn--small btn--black btn--black-hover-green" name="click" href="blog_processing.php?id=<?php echo $row["matintuc"];?>">Đọc thêm</a>
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog Grid -->
                           <?php
                            }
                           ;?>
                        </div>
                    </div>


                </div>  <!-- Start Rightside - Blog Grid Content -->
                
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->

    
<!-- ::::::  Start  Footer ::::::  -->
    <footer class="footer m-t-100">
        <div class="container">
            <!-- Start Footer Top Section --> 
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="index.php" class="footer__logo-link">
                                    <img src="assets/img/logo/logo.png" alt="" class="footer__logo-img">
                                </a>
                            </div>
                            <ul class="footer__social-nav">
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-twitter"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-youtube"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <div class="footer__about1">
                            <ul class="footer__address">
                                <li class="footer__address-item"><i class="fa fa-home"></i>Địa chỉ: 12 Chùa Bộc, Q. Đống Đa, Hà Nội, Việt Nam</li>
                                <li class="footer__address-item"><i class="fa fa-phone-alt"></i>+84 9999 9999</li>
                                <li class="footer__address-item"><i class="fa fa-envelope"></i>support@gsoreoriganicfood.com</li>
                            </ul>
                        </div>
                    </div> 
                    
                    <div class="col-lg-4 col-md-5">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">Thời gian mở cửa</h4>
                            <ul class="footer__nav">
                                <li class="footer__list">Thứ 2 - Thứ 6: 8h - 22h</li>
                                <li class="footer__list">Thứ 7: 9h - 20h</li>
                                <li class="footer__list">Chủ nhật: 14h - 18h</li>
                                <li class="footer__list">Chúng tôi làm việc tất cả các ngày lễ</li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
            </div> <!-- End Footer Top Section -->
            <!-- Start Footer Bottom Section --> 
            <div class="footer__bottom">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <!-- Start Footer Copyright Text -->
                        <div class="footer__copyright-text">
                            <p>Bản quyền &copy; <a href="https://gsoreoriganicfood.com/">Gsore Origanic Food</a>. Đã đăng ký Bản quyền</p>
                        </div> <!-- End Footer Copyright Text -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <!-- Start Footer return-and-refund Logo -->
                        <div class="footer__return-and-refund">
                            <a href="#" class="footer__return-and-refund-link">
                                <img src="assets/img/company-logo/return-and-refund.png" alt="" class="footer__return-and-refund-img">
                            </a>
                        </div>  <!-- End Footer return-and-refund Logo -->
                    </div>
                </div>
            </div> <!-- End Footer Bottom Section --> 
        </div>
    </footer> <!-- ::::::  End  Footer ::::::  -->

    
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-end">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Added to cart successfully!</div>
                                    <div class="modal__product-cart-buttons m-tb-15">
                                        <a href="view-cart.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">View Cart</a>
                                        <a href="checkout.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal__border">
                            <ul class="modal__product-shipping-info">
                                <li class="link--icon-left"><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</li>
                                <li>TOTAL PRICE: <span>$187.00</span></li>
                                <li><a href="#" class="btn text-underline color-green" data-bs-dismiss="modal">CONTINUE SHOPPING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-end">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery-box m-b-60">
                                    <div class="modal-product-image--large">
                                        <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h5 class="title title--normal m-b-20">Aliquam lobortis</h5>
                                    <div class="product__price">
                                        <span class="product__price-del">$35.90</span>
                                        <span class="product__price-reg">$31.69</span>
                                    </div>
                                    <ul class="product__review m-t-15">
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                    </ul>
                                    <div class="product__desc m-t-25 m-b-30">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Quantity: </span>
                                            <form class="modal-quantity-scale m-l-20">
                                                <div class="value-button" id="modal-decrease" onclick="decreaseValueModal()" >-</div>
                                                <input type="number" id="modal-number" value="1" />
                                                <div class="value-button" id="modal-increase" onclick="increaseValueModal()" >+</div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="product-links">
                                        <div class="product-social m-tb-30">
                                            <span>SHARE THIS PRODUCT</span>
                                            <ul class="product-social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->


    <!-- Vendor JS Files -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS Files -->
    <script src="assets/js/plugin/slick.min.js"></script>
    <script src="assets/js/plugin/jquery.countdown.min.js"></script>
    <script src="assets/js/plugin/material-scrolltop.js"></script>
    <script src="assets/js/plugin/price_range_script.js"></script>
    <script src="assets/js/plugin/in-number.js"></script>
    <script src="assets/js/plugin/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="assets/js/plugin/venobox.min.js"></script>
    <script src="assets/js/plugin/jquery.waypoints.js"></script>
    <script src="assets/js/plugin/jquery.lineProgressbar.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="assets/js/main.js"></script>
</body>

</html>
