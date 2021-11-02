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

    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="index.php">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Câu hỏi thường gặp</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content m-b-60 text-center">
                        <h5 class="section-content__title">Câu hỏi thường gặp</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="faq-section ">
                        <div class="faq-top m-b-40">
                            <h5 class="faq__title font--bold m-b-15">Dưới đây là những câu hỏi thường gặp, bạn có thể tìm thấy câu trả lời cho chính mình trước khi tìm kiếm trợ giúp từ chúng thôi</h5>
                            <p class="text--gray"></p>
                        </div>
                        <div class="faq__accordion accordian" id="faq__accordion">
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Làm thế nào để tôi có thể thanh toán?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Khi mọi thứ đều nằm trong Giỏ hàng của bạn, 
                                            hãy chọn "Tiến hành thanh toán" để bắt đầu quá trình thanh toán. 
                                            1. Hoàn tất trang Thông tin Vận chuyển và bấm Thanh toán. 
                                            2. Hoàn tất việc thanh toán. 
                                            3. Khi đơn đặt hàng của bạn được thông qua, bạn sẽ thấy Xác nhận đơn hàng của mình. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Làm thế nào để tôi thay đổi mật khẩu và thông tin về tài khoản?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Để thay đổi mật khẩu hoặc thông tin tài khoản của bạn đăng nhập vào tài khoản của bạn 
                                            bằng cách nhấp vào "Tài khoản của tôi" ở đầu trang và nhấp vào "Thông tin tài khoản".
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        Gsore xử lý đơn đặt hàng và vận chuyển như thế nào?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Tất cả các đơn đặt hàng của chúng tôi được vận chuyển 
                                            bằng cách sử dụng các công ty vận chuyển khác nhau, tùy thuộc vào vị trí của bạn. 
                                            Tất cả các đơn đặt hàng được xử lý nhanh nhất có thể.
                                            Mức giá vận chuyển đã được quy định trong Chính sách giao hàng và vận chuyển của chúng tôi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Chính sách hoàn trả của Gsore như thế nào?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Tất cả các sản phẩm đã mua có thể được trả lại trong vòng 14 ngày kể từ ngày mua 
                                            và phải kèm theo biên lai ban đầu bao gồm với lô hàng.
                                        </p>
                                        <p>
                                            Sự hài lòng của bạn được đảm bảo 100% trên tất cả các sản phẩm của chúng tôi!
                                            Nếu bạn không hoàn toàn hài lòng, hãy trả lại gói chưa được mở / phần chưa sử dụng và chúng tôi sẽ hoàn trả toàn bộ giá. 
                                            Lưu ý: Bạn phải trả chi phí vận chuyển đơn hàng. 
                                            Vui lòng liên hệ với chúng tôi theo support@gsoreoriganicfood.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        Gsore chấp nhận phương thức thanh toán nào?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Chúng tôi chấp nhận chuyển khoản trực tiếp và hình thức thanh toán khi nhận hàng.
                                            Với phương thức chuyển khoản trực tiếp, chúng tôi chấp nhận thẻ thanh toán nội địa và quốc tế (Visa, MasterCard, ...)
                                            của tất cả các ngân hàng đang hoạt động trong nước
                                            với các hệ thống bảo mật và phòng chống gian lận.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Gsore có giao hàng quốc tế không?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Rất tiếc, hiện tại chúng tôi chỉ bán & giao hàng trong khu vực Việt Nam.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Tôi có một câu hỏi khác</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Bạn có thể <a href="contact.php" style="color: #89c74a;">liên hệ</a> với chúng tôi.
                                            Chúng tôi sẽ trả lời bạn trong vòng 1 ngày làm việc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

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
                        </div> <!-- End Footer return-and-refund Logo -->
                    </div>
                </div>
            </div> <!-- End Footer Bottom Section -->
        </div>
    </footer> <!-- ::::::  End  Footer ::::::  -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>


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