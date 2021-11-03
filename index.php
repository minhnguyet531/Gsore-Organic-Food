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

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <!-- ::::::  Start Hero Section  ::::::  -->
        <div class="hero slider-dot-fix slider-dot slider-dot-fix slider-dot--center slider-dot-size--medium slider-dot-circle  slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="assets/img/hero/hero-home-1-img-1.jpg" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% khỏe mạnh và giá cả phải chăng</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Rau <br>  hữu cơ</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Thay đổi nhỏ khác biệt lớn</h4>
                                    <a href="shop.php" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="assets/img/hero/hero-home-1-img-2.jpg" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% khỏe mạnh và giá cả phải chăng</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Trái cây tươi <br>   hữu cơ</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Thay đổi nhỏ khác biệt lớn</h4>
                                    <a href="shop.php" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
        </div> <!-- ::::::  End Hero Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner m-t-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="product-single-default.php" class="banner__link">
                                    <img src="assets/img/banner/size-wide/banner-home-1-img-1-wide.jpg" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title  font--regular letter-spacing--4  text-center m-b-10">Rau xanh</h6>
                                    <h2 class="banner__title banner__title--large font--medium letter-spacing--4  text-uppercase">100% Hữu cơ</h2>
                                    <h6 class="banner__title font--regular letter-spacing--4  text-center m-b-20">Dinh dưỡng lành mạnh</h6>
                                    <div class="text-center">
                                        <a href="product-single-default.php" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Mua ngay</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="product-single-default.php" class="banner__link">
                                    <img src="assets/img/banner/size-wide/banner-home-1-img-2-wide.jpg" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-10">Thảo dược tươi</h6>
                                    <h2 class="banner__title banner__title--large letter-spacing--4 font--medium text-uppercase">Rau bina</h2>
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-20">Thực phẩm lành mạnh</h6>
                                    <div class="text-center">
                                        <a href="shop.php" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Mua ngay</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Catagory Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Các loại sản phẩm</h5>
                            <a href="shop.php" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Nhiều loại hơn <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__catagory">
                            
                            <?php 
                                // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
                                include("config.php");

                                // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                                $sql ="SELECT loaisanpham.tenloaisanpham, loaisanpham.anhloai, COUNT(sanpham.masanpham) as 'total' from loaisanpham left JOIN sanpham 
                                on loaisanpham.maloaisanpham = sanpham.maloaisanpham GROUP by loaisanpham.maloaisanpham"
                                
                                    ;

                                // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                                $loai_san_pham = mysqli_query($ket_noi, $sql);

                                // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                                while ($row = mysqli_fetch_array($loai_san_pham)) {
                            ;?>
                                <!-- Start Single catagory Product -->
                                <div class="product__catagory--single">
                                    <!-- Start Product Content -->
                                    <div class="product__content product__content--catagory">
                                        <a href="product-single-default.php" class="product__link"><?php echo $row['tenloaisanpham'];?>  </a>
                                        <span class="product__items--text"><?php echo $row['total'];?> Sản phẩm</span>
                                    </div> <!-- End Product Content -->
                                    <!-- Start Product Image -->
                                    <div class="product__img-box product__img-box--catagory">
                                        <a href="shop.php?cate=<?php echo $row["tenloaisanpham"]; ?>&supplier=&sort=&page=1" class="product__img--link">
                                            <img class="product__img img-fluid" src="<?php echo 'assets/img/product/category/'.$row['anhloai'];?>" alt="">
                                        </a>
                                    </div> <!-- End Product Image -->
                                </div> <!-- End Single Default Product -->
                                    
                            <?php
                                    }
                                //   5. Đóng kết nối sau khi sử dụng
                                    mysqli_close($ket_noi)
                            ;?>  
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Catagory Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Danh mục hàng đầu</h5>
                            <ul class="tablist tablist--style-blue tablist--style-gap-20 nav">
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#fruits">Trái cây</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#milk">Sữa</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#fish">Cá</a></li>
                            </ul>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content tab-animate-zoom">
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane show active" id="fruits">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                                        <?php
                                            include("config.php");

                                            $sql = "
                                                select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                                where maloaisanpham = 7 and sanpham.soluong !=0
                                            ";

                                            $san_pham = mysqli_query($ket_noi, $sql);
                                            while($row = mysqli_fetch_array($san_pham)){

                                        ;?>

                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__default--single text-center">
                                                <!-- Start Product Image -->
                                                <div class="product__img-box  pos-relative">
                                                    <a href="product-single-default.php?id=<?php echo $row['masanpham']?>" class="product__img--link">
                                                        <img class="product__img img-fluid" src="<?php echo 'assets/img/product/size-normal/'.$row['anh'];?>" alt="">
                                                    </a>
                                                    <?php 
                                                        if($row['soluong']==0){
                                                            echo '<span class="product__label product__label--sale-out">Hết hàng</span>';                                                               
                                                        }
                                                    ?>
                                                    <!-- Start Procuct Label -->
                                                    <?php
                                                        // Hàm strtotime() sẽ phân tích bất kỳ chuỗi thời gian bằng tiếng anh thành một số nguyên chính là timestamp của thời gian đó.
                                                        $first_date = strtotime(date($row["thoihan"]));
                                                        $second_date = strtotime(date("Y-m-d H:i:s"));
                                                        if($first_date > $second_date && $row['giamgia']!=0){
                                                            echo '<span class="product__label product__label--sale-dis">- '.$row['giamgia'].' %</span>';
                                                            echo '
                                                                <div class="product__counter-box">
                                                                    <div class="product__counter-item" data-countdown="'.$row['thoihan'].'"></div>
                                                                </div>'
                                                            ;
                                                           
                                                        }
                                                    ;?>
                                                    <!-- End Procuct Label -->
                                                    <!-- Start Product Action Link-->
                                                    <ul class="product__action--link pos-absolute">
                                                        <?php
                                                            if($row["soluong"]!=0){
                                                                echo '
                                                                    <li><a href="#" onclick="addCart('.$row["masanpham"].')" id="'.$row["masanpham"].'" class="addcartbtn"><i class="icon-shopping-cart"></i></a></li> 
                                                                ';
                                                            }
                                                        ?>
                                                        <li><a href="#" id="<?php echo $row['masanpham']?>" class="addWishList" onclick="addWishList(<?php echo $row['masanpham']?>)"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" id="<?php echo $row['masanpham']?>" class="view_btn"><i class="icon-eye"></i></a></li>
                                                    </ul> <!-- End Product Action Link -->
                                                </div> <!-- End Product Image -->
                                                <!-- Start Product Content -->
                                                <div class="product__content m-t-20">
                                                    <ul class="product__review">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                    <a href="product-single-default.php" class="product__link"><?php echo $row['tensanpham'];?></a>
                                                    <div class="product__price m-t-5">
                                                        <?php
                                                            $first_date = strtotime(date($row["thoihan"]));
                                                            $second_date = strtotime(date("Y-m-d H:i:s"));
                                                            if($first_date > $second_date && $row['giamgia']!=0){
                                                                $gia_da_giam = $row["dongia"]*(100 - $row["giamgia"])/100;
                                                                echo '<span class="product_price">'.$gia_da_giam.' đ'.' <del>'.$row["dongia"].' đ</del></span>';
                                                            }
                                                            else {
                                                                echo '<span class="product_price">'.$row["dongia"].' đ</span>';
                                                            }
                                                        ;?>
                                                       
                                                    </div>
                                                </div> <!-- End Product Content -->
                                            </div> <!-- End Single Default Product -->

                                        <?php
                                            }
                                            mysqli_close($ket_noi)
                                        ;?>
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane" id="milk">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                                        <?php
                                            include("config.php");

                                            $sql = "
                                                select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                                where maloaisanpham = 3
                                            ";

                                            $san_pham = mysqli_query($ket_noi, $sql);
                                            while($row = mysqli_fetch_array($san_pham)){

                                        ;?>

                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.php?id=<?php echo $row['masanpham']?>" class="product__img--link">
                                                    <img class="product__img img-fluid" src="<?php echo 'assets/img/product/size-normal/'.$row['anh'];?>" alt="">
                                                </a>
                                                <?php 
                                                        if($row['soluong']==0){
                                                            echo '<span class="product__label product__label--sale-out">Hết hàng</span>';                                                               
                                                        }
                                                    ?>
                                                <!-- Start Procuct Label -->
                                                <?php
                                                    $first_date = strtotime(date($row["thoihan"]));
                                                    $second_date = strtotime(date("Y-m-d H:i:s"));
                                                    if($first_date > $second_date && $row['giamgia']!=0){
                                                        echo '<span class="product__label product__label--sale-dis">- '.$row['giamgia'].' %</span>';
                                                        echo '
                                                            <div class="product__counter-box">
                                                                <div class="product__counter-item" data-countdown="'.$row['thoihan'].'"></div>
                                                            </div>'
                                                        ;
                                                       
                                                    }
                                                ;?>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <?php 
                                                        if($row["soluong"]!=0){
                                                            echo '
                                                                <li><a href="#" onclick="addCart('.$row["masanpham"].')" id="'.$row["masanpham"].'" class="addcartbtn"><i class="icon-shopping-cart"></i></a></li> 
                                                            ';
                                                        }
                                                    ?>
                                                    <li><a href="#" id="<?php echo $row['masanpham']?>" class="addWishList" onclick="addWishList(<?php echo $row['masanpham']?>)"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#" id="<?php echo $row['masanpham']?>" class="view_btn"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.php" class="product__link"><?php echo $row['tensanpham'];?></a>
                                                <div class="product__price m-t-5">
                                                    <?php
                                                        $first_date = strtotime(date($row["thoihan"]));
                                                        $second_date = strtotime(date("Y-m-d H:i:s"));
                                                        if($first_date > $second_date && $row['giamgia']!=0){
                                                            $gia_da_giam = $row["dongia"]*(100 - $row["giamgia"])/100;
                                                            echo '<span class="product_price">'.$gia_da_giam.' đ'.' <del>'.$row["dongia"].' đ</del></span>';
                                                        }
                                                        else {
                                                            echo '<span class="product_price">'.$row["dongia"].' đ</span>';
                                                        }
                                                    ;?>
                                                    
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->

                                        <?php
                                            }
                                            mysqli_close($ket_noi)
                                        ;?>
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane" id="fish">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                                        <?php
                                            include("config.php");

                                            $sql = "
                                                select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                                where maloaisanpham = 8
                                            ";

                                            $san_pham = mysqli_query($ket_noi, $sql);
                                            while($row = mysqli_fetch_array($san_pham)){

                                        ;?>

                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.php?id=<?php echo $row['masanpham']?>" class="product__img--link">
                                                    <img class="product__img img-fluid" src="<?php echo 'assets/img/product/size-normal/'.$row['anh'];?>" alt="">
                                                </a>
                                                <?php 
                                                    if($row['soluong']==0){
                                                        echo '<span class="product__label product__label--sale-out">Hết hàng</span>';                                                               
                                                    }
                                                ?>
                                                <?php
                                                    $first_date = strtotime(date($row["thoihan"]));
                                                    $second_date = strtotime(date("Y-m-d H:i:s"));
                                                    if($first_date > $second_date && $row['giamgia']!=0){
                                                        echo '<span class="product__label product__label--sale-dis">- '.$row['giamgia'].' %</span>';
                                                        echo '
                                                            <div class="product__counter-box">
                                                                <div class="product__counter-item" data-countdown="'.$row['thoihan'].'"></div>
                                                            </div>'
                                                        ;
                                                       
                                                    }
                                                ;?>
                                                <!-- Start Procuct Label -->
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <?php 
                                                        if($row["soluong"]!=0){
                                                            echo '
                                                                <li><a href="#" onclick="addCart('.$row["masanpham"].')" id="'.$row["masanpham"].'" class="addcartbtn"><i class="icon-shopping-cart"></i></a></li> 
                                                            ';
                                                        }
                                                    ?>
                                                    <li><a href="#" id="<?php echo $row['masanpham']?>" class="addWishList" onclick="addWishList(<?php echo $row['masanpham']?>)"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#" id="<?php echo $row['masanpham']?>" class="view_btn"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.php" class="product__link"><?php echo $row['tensanpham'];?></a>
                                                <div class="product__price m-t-5">
                                                    <?php
                                                        $first_date = strtotime(date($row["thoihan"]));
                                                        $second_date = strtotime(date("Y-m-d H:i:s"));
                                                        if($first_date > $second_date && $row['giamgia']!=0){
                                                            $gia_da_giam = $row["dongia"]*(100 - $row["giamgia"])/100;
                                                            echo '<span class="product_price">'.$gia_da_giam.' đ'.' <del>'.$row["dongia"].' đ</del></span>';
                                                        }
                                                        else {
                                                            echo '<span class="product_price">'.$row["dongia"].' đ</span>';
                                                        }
                                                    ;?>
                                                
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->

                                        <?php
                                            }
                                            mysqli_close($ket_noi)
                                        ;?>
                                            
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

         <!-- ::::::  Start banner Section  ::::::  -->
         <div class="banner m-t-100 pos-relative">
            <div class="banner__bg">
                <img src="assets/img/banner/size-extra-large-wide/banner-home-1-img-1-extra-large-wide.jpg" alt="">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                                <h6 class="banner__title  font--medium m-b-10">GIẢM GIÁ ĐẶC BIỆT</h6>
                                <h1 class="banner__title banner__title--large font--regular text-capitalize">Áp dụng tất cả <br><br>sản phẩm</h1>
                                <h6 class="banner__title font--medium m-b-40">Giảm giá cho tất cả các sản phẩm.</h6>
                                <a href="shop.php" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Mua ngay</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>    
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Sản phẩm mới</h5>
                            <a href="shop.php" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem thêm sản phẩm<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
                                <?php
                                    include("config.php");
                                    $sql = "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                    order by masanpham DESC
                                    ";

                                    $san_pham = mysqli_query($ket_noi,$sql);
                                    while($row = mysqli_fetch_array($san_pham))
                                    {
                                            
                                ;?>
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.php?id=<?php echo $row['masanpham']?>" class="product__img--link">
                                            <img class="product__img img-fluid" src="<?php echo 'assets/img/product/size-normal/'.$row['anh'];?>" alt="">
                                        </a>
                                        <?php 
                                            if($row['soluong']==0){
                                                echo '<span class="product__label product__label--sale-out">Hết hàng</span>';                                                               
                                            }
                                        ?>
                                        <!-- Start Procuct Label -->
                                        <?php
                                            $first_date = strtotime(date($row["thoihan"]));
                                            $second_date = strtotime(date("Y-m-d H:i:s"));
                                            if($first_date > $second_date && $row['giamgia']!=0){
                                                echo '<span class="product__label product__label--sale-dis">- '.$row['giamgia'].' %</span>';
                                                echo '
                                                    <div class="product__counter-box">
                                                        <div class="product__counter-item" data-countdown="'.$row['thoihan'].'"></div>
                                                    </div>'
                                                ;
                                               
                                            }
                                        ;?>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <?php 
                                                if($row["soluong"]!=0){
                                                    echo '
                                                        <li><a href="#" onclick="addCart('.$row["masanpham"].')" id="'.$row["masanpham"].'" class="addcartbtn"><i class="icon-shopping-cart"></i></a></li> 
                                                    ';
                                                }
                                            ?>
                                            <li><a href="#" id="<?php echo $row['masanpham']?>" class="addWishList" onclick="addWishList(<?php echo $row['masanpham']?>)"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" id="<?php echo $row['masanpham']?>" class="view_btn"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.php" class="product__link"><?php echo $row['tensanpham'];?></a>
                                        <div class="product__price m-t-5">
                                            <?php
                                                $first_date = strtotime(date($row["thoihan"]));
                                                $second_date = strtotime(date("Y-m-d H:i:s"));
                                                if($first_date > $second_date && $row['giamgia']!=0){
                                                    $gia_da_giam = $row["dongia"]*(100 - $row["giamgia"])/100;
                                                    echo '<span class="product_price">'.$gia_da_giam.' đ'.' <del>'.$row["dongia"].' đ</del></span>';
                                                }
                                                else {
                                                    echo '<span class="product_price">'.$row["dongia"].' đ</span>';
                                                }
                                            ;?>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->
                                </div>
                                <?php
                                    }
                                    mysqli_close($ket_noi)
                                ;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <!-- ::::::  Start Testimonial Section  ::::::  -->
        <div class="testimonial m-t-100 pos-relative">
            <div class="testimonial__bg">
                <img src="assets/img/testimonial/testimonials-bg.jpg" alt="">
            </div>
            <div class="testimonial__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Cảm nhận của khách hàng</h2>
                            </div>
                            <div class="testimonial__slider default-slider">
                                <?php
                                    include("config.php");
                                    $sql = "Select * from binhluan left join khachdathang on binhluan.makhachdathang = khachdathang.makhachdathang
                                        ORDER BY khachdathang.makhachdathang DESC
                                        LIMIT 5
                                    ";
                                    $binh_luan = mysqli_query($ket_noi,$sql);
                                    $i = 0;
                                    while($row = mysqli_fetch_array($binh_luan)){
                                        $i++;
                                ;?>
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc"><?php echo $row['noidungbinhluan'];?></p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user" src="assets/img/testimonial/anh<?php echo $i?>.jpg" alt="">
                                            <h5 class="testimonial__info--desig m-t-20"><?php echo $row['tenkhachdathang'];?> </h5>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                    mysqli_close($ket_noi);
                                ;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Testimonial Section  ::::::  -->

        <!-- ::::::  Start  Blog News  ::::::  -->
        <div class="blog m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Tin tức mới nhất của chúng tôi</h5>
                            <a href="blog-grid-sidebar-left.php" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem thêm tin tức <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red">
                            <div class="blog-feed-slider-3grid default-slider gap__col--30 ">
                                <?php
                                    include("config.php");
                                    $sql = "
                                        select * from tintuc
                                    
                                    ";
                                    $tin_tuc = mysqli_query($ket_noi, $sql);
                                    while($row = mysqli_fetch_array($tin_tuc)){

                                    
                                ;?>
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.php" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/<?php echo $row['anhminhhoa'];?>" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.php" class="blog-feed__link"><?php echo $row['tieude'];?></a>
                                        
                                        <div class="blog-feed__post-meta">
                                            Tác giả
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.php"><span class="blog-feed__post-meta--author"><?php echo $row['nguoidang'];?> /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.php"><span class="blog-feed__post-meta--date"><?php echo $row['ngaydang'];?></span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt"><?php echo $row['mota'];?></p>
                                        <a href="blog_processing.php?id=<?php echo $row["matintuc"];?>" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Chi tiết</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <?php
                                    }
                                    mysqli_close($ket_noi);
                                ;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  -->

         <!-- ::::::  Start Newsletter Section  ::::::  -->
         <div class="newsletter m-t-100 pos-relative">
            <div class="newsletter__bg">
                <img src="assets/img/newsletter/newsletter-bg.jpg" alt="">
            </div>
            <div class="newsletter__content pos-absolute absolute-center text-center">
               
                <div class="container">
                    <div class="row">
                        <!-- Start Single CMS box -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="cms__content">
                                <div class="cms__icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="cms__text">
                                    <h6 class="cms__title">Miễn phí vận chuyển</h6>
                                    <p class="para__text">Vận chuyển miễn phí cho những đơn hàng có giá trị cao hoặc trong phạm vi cho phép</p>
                                </div>
                            </div>
                        </div> <!-- End Single CMS box -->
                        <!-- Start Single CMS box -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="cms__content">
                                <div class="cms__icon">
                                    <i class="far fa-money-bill-alt"></i>
                                </div>
                                <div class="cms__text">
                                    <h6 class="cms__title">Hoàn tiền 100%</h6>
                                    <p class="para__text">Hoàn trả toàn bộ chi phí cho những ai phát hiện ra thực phẩm của chúng tôi không sạch</p>
                                </div>
                            </div>
                        </div> <!-- End Single CMS box -->
                        <!-- Start Single CMS box -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="cms__content">
                                <div class="cms__icon">
                                    <i class="far fa-life-ring"></i>
                                </div>
                                <div class="cms__text">
                                    <h6 class="cms__title">Hỗ trợ trực tuyến 24/7</h6>
                                    <p class="para__text">Chúng tôi luôn sẵn sàng hỗ trợ khách hàng mọi lúc mọi nơi khi được yêu cầu</p>
                                </div>
                            </div>
                        </div> <!-- End Single CMS box -->
                    </div>
                </div>
                
            </div>
        </div> <!-- ::::::  End newsletter Section  ::::::  -->

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo__area default-slider">
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Company Logo Section  ::::::  -->

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
                    
                </div>
            </div>
        </div>
        </div>
    </div> 
    <!-- End Modal Add cart -->

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="addWishListModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    
                </div>
            </div>
        </div>
        </div>
    </div> 
    <!-- End Modal Add cart -->
    
    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div> 
    <!-- End Modal Quickview cart  -->

    <!-- lấy đc masanpham tương ứng khi muốn hiện modal -->
    <script type="text/javascript" language="javascript">  
        $(document).ready(function () {
            $('.view_btn').click(function(e){
                e.preventDefault();
                // alert('hello');
                // lấy giá trị của id
                var masanpham = $(this).attr('id');
                // console.log(masanpham);

                $.ajax({
                    type: "POST",
                    url: "viewModal.php",
                    data: {
                        'checking_viewbtn': true,
                        'masanpham': masanpham,
                    },
                    success: function(response){
                        // console.log(response);
                        $('.modal-body').html(response);
                        $('#modalQuickView').modal('show');
                    }
                })
            });
        });
        

    </script>

    <script type="text/javascript" language="javascript">
        function addCart(id){
            // alert(id);
            // POST JQuery
            // lấy số lượng mua
            num = $("#num_"+id).val();
            if(num == undefined){
                num = 1;
            }
            //    thêm số lượng mặt hàng
            $.post("shoppingCart.php",{'id':id, 'soluongmua':num}, function(data, status){
                // cắt chuỗi ở vị trí dấu trừ
                item = data.split("-");
                qty = item[0];
                total = item[1];
                $.ajax({
                    type: "POST",
                    url: "addCartModal.php",
                    data: {
                        'checking_addcartbtn': true,
                        'id': id,
                    },
                    success: function(response){
                        // console.log(response);
                        $('.modal-body').html(response);
                        $('#modalAddCart').modal('show');
                        $("#header").load("index.php #header");
                    }
                })
            });
           
        }

        function addWishList(id){
            $.post("addWishList.php",{'id':id}, function(data, status){
                $.ajax({
                    type: "POST",
                    url: "addWishListModal.php",
                    data: {
                        'checking_addwishlistbtn': true,
                        'id': id,
                    },
                    success: function(response){
                        // console.log(response);
                        $('.modal-body').html(response);
                        $('#addWishListModal').modal('show');
                        $("#header").load("index.php #header");
                    }
                })
            });
        }

    </script>

    
    
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
