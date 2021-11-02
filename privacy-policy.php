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
                        <li class="page-breadcrumb__nav active"> Chính sách bảo mật</li>
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
                    <div class="col-12">
                        <div class="section-content m-b-60 text-center">
                            <h5 class="section-content__title">Chính sách bảo mật</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="privacy-policy-section">
                        <div class="text-area">
                            <h5 class="font--bold">Chúng tôi là ai?</h5>
                            <div class="para__text">
                                <p>Địa chỉ trang web của chúng tôi là: <a href="#">[mấy nx đẩy lên internet thì thêm link web vào đây nhé]</a></p>
                                <p>Sự riêng tư của bạn rất quan trọng đối với chúng tôi. Để bảo vệ quyền riêng tư của bạn tốt hơn, chúng tôi cung cấp thông báo này để giải thích các hoạt động thông tin trực tuyến của chúng tôi và các lựa chọn bạn có thể thực hiện về cách thông tin được thu thập và sử dụng của bạn.</p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">Chúng tôi thu thập dữ liệu cá nhân nào và tại sao chúng tôi thu thập dữ liệu đó?</h5>
                            <h6 class="font--bold">Bình luận</h6>
                            <div class="para__text">
                                <p>Khi khách truy cập để lại nhận xét trên trang web, chúng tôi thu thập dữ liệu được hiển thị trong biểu mẫu nhận xét, cũng như địa chỉ IP của khách truy cập và chuỗi tác nhân người dùng trình duyệt để giúp phát hiện spam.</p>
                                <p>Một chuỗi ẩn danh được tạo từ địa chỉ email của bạn (còn được gọi là mã băm) có thể được cung cấp cho dịch vụ Gravatar để xem bạn có đang sử dụng nó hay không. Chính sách bảo mật của dịch vụ Gravatar có sẵn tại đây: https://automattic.com/privacy/. Sau khi phê duyệt bình luận của bạn, ảnh hồ sơ của bạn sẽ hiển thị công khai trong bối cảnh bình luận của bạn.</p>
                            </div>

                            <h6 class="font--bold">Phương tiện truyền thông</h6>
                            <div class="para__text">
                                <p>Nếu bạn tải hình ảnh lên trang web, bạn nên tránh tải lên hình ảnh có bao gồm dữ liệu vị trí nhúng (EXIF GPS). Khách truy cập trang web có thể tải xuống và trích xuất bất kỳ dữ liệu vị trí nào từ hình ảnh trên trang web.</p>
                            </div>

                            <h6 class="font--bold">Cookies</h6>
                            <div class="para__text">
                                <p>Nếu bạn để lại nhận xét trên trang web của chúng tôi, bạn có thể chọn lưu tên, địa chỉ email và trang web của bạn trong cookie. Đây là những điều thuận tiện cho bạn để bạn không phải điền lại thông tin chi tiết của mình khi bạn để lại bình luận khác. Những cookie này sẽ tồn tại trong một năm.</p>
                                <p>Nếu bạn có tài khoản và bạn đăng nhập vào trang web này, chúng tôi sẽ đặt một cookie tạm thời để xác định xem trình duyệt của bạn có chấp nhận cookie hay không. Cookie này không chứa dữ liệu cá nhân và sẽ bị loại bỏ khi bạn đóng trình duyệt của mình.</p>
                                <p>Khi bạn đăng nhập, chúng tôi cũng sẽ thiết lập một số cookie để lưu thông tin đăng nhập và các lựa chọn hiển thị trên màn hình của bạn. Cookie đăng nhập tồn tại trong hai ngày và cookie tùy chọn màn hình tồn tại trong một năm. Nếu bạn chọn "Nhớ thông tin đăng nhập", thông tin đăng nhập của bạn sẽ tồn tại trong hai tuần. Nếu bạn đăng xuất khỏi tài khoản của mình, cookie đăng nhập sẽ bị xóa.</p>
                                <p>Nếu bạn chỉnh sửa hoặc xuất bản một bài báo, một cookie bổ sung sẽ được lưu trong trình duyệt của bạn. Cookie này không bao gồm dữ liệu cá nhân và chỉ cho biết ID bài đăng của bài viết bạn vừa chỉnh sửa. Nó sẽ hết hạn sau 1 ngày.</p>
                                
                            </div>
                            <h6 class="font--bold">Nhúng nội dung từ các trang web khác</h6>
                            <div class="para__text">
                                <p>Các bài viết trên trang web này có thể bao gồm nội dung được nhúng (ví dụ: video, hình ảnh, bài báo, v.v.). Nội dung được nhúng từ các trang web khác hoạt động theo cách giống hệt như khi khách truy cập đã truy cập trang web khác.</p>
                                <p>Các trang web này có thể thu thập dữ liệu về bạn, sử dụng cookie, nhúng theo dõi bên thứ ba bổ sung và giám sát tương tác của bạn với nội dung được nhúng đó, bao gồm theo dõi tương tác của bạn với nội dung được nhúng nếu bạn có tài khoản và đăng nhập vào trang web đó.</p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">Chúng tôi lưu giữ dữ liệu của bạn trong bao lâu</h5>
                            <div class="para__text">
                                <p>Nếu bạn để lại nhận xét, nhận xét và siêu dữ liệu của nó sẽ được giữ lại vô thời hạn. Điều này giúp chúng tôi có thể tự động nhận ra và phê duyệt bất kỳ nhận xét tiếp theo nào thay vì giữ chúng trong hàng đợi kiểm duyệt.</p>
                                <p>Đối với người dùng đăng ký trên trang web của chúng tôi (nếu có), chúng tôi cũng lưu trữ thông tin cá nhân mà họ cung cấp trong hồ sơ người dùng của họ. Tất cả người dùng có thể xem, chỉnh sửa hoặc xóa thông tin cá nhân của họ bất kỳ lúc nào (ngoại trừ họ không thể thay đổi tên người dùng của mình). Người quản trị trang web cũng có thể xem và chỉnh sửa thông tin đó.</p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">Bạn có quyền gì đối với dữ liệu của mình</h5>
                            <div class="para__text">
                                <p>Nếu bạn có tài khoản trên trang web này hoặc đã để lại nhận xét, bạn có thể yêu cầu nhận tệp dữ liệu cá nhân đã xuất mà chúng tôi lưu giữ về bạn, bao gồm bất kỳ dữ liệu nào bạn đã cung cấp cho chúng tôi. Bạn cũng có thể yêu cầu chúng tôi xóa mọi dữ liệu cá nhân mà chúng tôi lưu giữ về bạn. Điều này không bao gồm bất kỳ dữ liệu nào mà chúng tôi có nghĩa vụ lưu giữ cho các mục đích hành chính, pháp lý hoặc bảo mật.</p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">Nơi chúng tôi gửi dữ liệu của bạn</h5>
                            <div class="para__text">
                                <p>Nhận xét của khách truy cập có thể được kiểm tra thông qua dịch vụ phát hiện spam tự động.</p>
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
                        </div>  <!-- End Footer return-and-refund Logo -->
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
1
Đang hiển thị 2260627540757861418.