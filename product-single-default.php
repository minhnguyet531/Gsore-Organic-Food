<?php
    ob_start();
    session_start();
    include("config.php");
    $cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
    $wishlist = (isset($_SESSION["wishlist"]))?$_SESSION["wishlist"] : [];
    if (isset($_GET['id'])) {
        $ma_san_pham =  $_GET['id'];

    }

    $sql = "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai 
        left join nhacungcap on sanpham.manhacungcap = nhacungcap.manhacungcap
        left join loaisanpham on sanpham.maloaisanpham = loaisanpham.maloaisanpham
     where masanpham = '".$ma_san_pham."'";

    $san_pham = mysqli_query($ket_noi,$sql);
    $row = mysqli_fetch_assoc($san_pham);
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
                        <li class="page-breadcrumb__nav active">Chi tiết sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">

        <!-- Start Product Details Gallery -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="product-gallery-box product-gallery-box--default m-b-60">
                            <div class="product-image--large product-image--large-horizontal">
                                <img class="img-fluid" id="img-zoom" src="assets/img/product/size-normal/<?php echo $row['anh'];?>" data-zoom-image="assets/img/product/size-normal/<?php echo $row['anh'];?>" alt="">
                            </div>
                            <div id="gallery-zoom" class="product-image--thumb product-image--thumb-horizontal pos-relative">
                                <a class="zoom-active" data-image="assets/img/product/size-normal/<?php echo $row['anh'];?>" data-zoom-image="assets/img/product/size-normal/<?php echo $row['anh'];?>">
                                    <img class="img-fluid" src="assets/img/product/size-normal/<?php echo $row['anh'];?>" alt="">
                                </a>
                                <a data-image="assets/img/product/size-normal/<?php echo $row['anh'];?>" data-zoom-image="assets/img/product/size-normal/<?php echo $row['anh'];?>">
                                    <img class="img-fluid" src="assets/img/product/size-normal/<?php echo $row['anh'];?>" alt="">
                                </a>
                                <a data-image="assets/img/product/size-normal/<?php echo $row['anh'];?>" data-zoom-image="assets/img/product/size-normal/<?php echo $row['anh'];?>">
                                    <img class="img-fluid" src="assets/img/product/size-normal/<?php echo $row['anh'];?>" alt="">
                                </a>
                                <a data-image="assets/img/product/size-normal/<?php echo $row['anh'];?>" data-zoom-image="assets/img/product/size-normal/<?php echo $row['anh'];?>">
                                    <img class="img-fluid" src="assets/img/product/size-normal/<?php echo $row['anh'];?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product-details-box m-b-60">
                            <h4 class="font--regular m-b-20"><?php echo $row['tensanpham'];?></h4>
                            <ul class="product__review">
                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                <li class="product__review--blank"><i class="icon-star"></i></li>
                            </ul>
                            <div class="product__price m-t-5">
                                <span class="product__price product__price--large">
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
                                </span>
                                <?php
                                    $first_date = strtotime(date($row["thoihan"]));
                                    $second_date = strtotime(date("Y-m-d H:i:s"));
                                    if($first_date > $second_date && $row['giamgia']!=0){
                                        echo '<span class="product__tag m-l-15 btn--tiny btn--green">- '.$row['giamgia'].' %</span>';
                                    }
                                ;?>
                            </div>

                            <div class="product__desc m-t-25 m-b-30">
                                <p><?php echo $row['mota'];?></p>
                            </div>
                            <div class="product-var p-tb-30">
                                <div class="product__stock m-b-20">
                                    <?php 
                                        if ($row['soluong'] != 0) {
                                            echo '<span class="product__stock--in"><i class="fas fa-check-circle"></i>[Còn '.$row['soluong'].' sản phẩm]</span>';
                                        }
                                        else {
                                            echo '<span class="product__stock--in"><i class="fas fa-check-circle"></i>[Hết hàng]</span>';
                                        }
                                    ;?>
                                    
                                </div>
                                <div class="product-quantity product-var__item">
                                    <ul class="product-modal-group">
                                        <li><a href="#modalSizeGuide" data-bs-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-money-check-edit"></i>Chính sách đổi trả</a></li>
                                        <li><a href="#modalShippinginfo" data-bs-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Chính sách vận chuyển</a></li>
                                        <li><a href="#modalProductAsk" data-bs-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Trợ giúp về sản phẩm</a></li>
                                    </ul>
                                </div>
                                
                                <div class="product-quantity product-var__item d-flex align-items-center">
                                    <span class="product-var__text">Số lượng: </span>
                                    <form class="quantity-scale m-l-20">
                                        <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                        <input type="hidden" id="soluongton" value="<?php echo $row['soluong']?>" />
                                        <input type="number" id="number" class="num_<?php echo $row['masanpham']?>" value="1" />
                                        <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                                    </form>
                                </div>
                                <div class="product-var__item">
                                    <?php 
                                        if($row["soluong"]!=0){
                                            echo '
                                                <a href="#" onclick="addCart('.$row["masanpham"].')" id="'.$row["masanpham"].'" class="addcartbtn btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Thêm vào giỏ hàng</a>
                                            ';
                                        }
                                        else {
                                            echo '
                                                <a href="#" class="addcartbtn btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Sản phẩm đã bán hết</a>
                                            ';

                                        }
                                    ?>
                                    <a href="#" id="<?php echo $row['masanpham']?>" class="btn btn--round btn--round-size-small btn--green btn--green-hover-black" onclick="addWishList(<?php echo $row['masanpham']?>)"><i class="fas fa-heart"></i></a>
                                </div>
                                <div class="product-var__item">
                                    <div class="dynmiac_checkout--button">
                                        <?php 
                                            if($row['soluong']!=0){
                                                echo '
                                                    <label for="buy-now-check" class="m-b-20">Ngại gì không mua ngay sản phẩm này</label>
                                                    <a href="#" onclick="addCartNow('.$row['masanpham'].')" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Mua ngay</a>
                                                ';
                                            }
                                            else {
                                                echo '
                                                    <label for="buy-now-check" class="m-b-20">Sản phẩm này tạm hết hàng.</label>
                                                ';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-var__item">
                                    <span class="product-var__text">Phương thức thanh toán</span>
                                    <ul class="return-and-refund-icon m-t-5">
                                        <li><img src="assets/img/icon/return-and-refund/paypal.svg" alt=""></li>
                                        <li><img src="assets/img/icon/return-and-refund/amex.svg" alt=""></li>
                                        <li><img src="assets/img/icon/return-and-refund/ipay.svg" alt=""></li>
                                        <li><img src="assets/img/icon/return-and-refund/visa.svg" alt=""></li>
                                        <li><img src="assets/img/icon/return-and-refund/shoify.svg" alt=""></li>
                                        <li><img src="assets/img/icon/return-and-refund/mastercard.svg" alt=""></li>
                                        <li><img src="assets/img/icon/return-and-refund/gpay.svg" alt=""></li>
                                    </ul>
                                </div>
                              
                                <div class="product-var__item d-flex align-items-center">
                                    <span class="product-var__text">Chia sẻ: </span>
                                    <ul class="product-social m-l-20">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Product Details Gallery -->

        <!-- Start Product Details Tab -->
        <div class="product-details-tab-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-details-content">
                            <ul class="tablist tablist--style-black tablist--style-title tablist--style-gap-30 nav">
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#product-desc">Mô tả sản phẩm</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#product-dis">Thông tin chi tiết</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#product-review">Đánh giá</a></li>
                            </ul>
                            <div class="product-details-tab-box">
                                <div class="tab-content">
                                    <!-- Start Tab - Product Description -->
                                    <div class="tab-pane show active" id="product-desc">
                                        <div class="para__content">
                                            <div class="para__text"><?php echo $row['mota']?></div>                                            
                                        </div>
                                    </div> <!-- End Tab - Product Description -->

                                    <!-- Start Tab - Product Details -->
                                    <div class="tab-pane" id="product-dis">
                                        <div class="product-dis__content">
                                            <a href="#" class="product-dis__img m-b-30"><img src="assets/img/logo/another-logo.jpg" alt=""></a>
                                            <div class="table-responsive-md">
                                                <table class="product-dis__list table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td class="product-dis__title">Tên nhà cung cấp</td>
                                                            <td class="product-dis__text"><?php echo $row['tennhacungcap']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="product-dis__title">Địa chỉ nhà cung cấp</td>
                                                            <td class="product-dis__text"><?php echo $row['diachinhacungcap']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="product-dis__title">Tên loại sản phẩm</td>
                                                            <td class="product-dis__text"><?php echo $row['tenloaisanpham']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="product-dis__title">Thông tin khuyến mãi</td>
                                                            <td class="product-dis__text">
                                                                <?php 
                                                                    if($row['giamgia']!=0){
                                                                        echo "Đang được giảm giá";
                                                                    }
                                                                    else{
                                                                        echo "Không được giảm giá";
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- End Tab - Product Details -->

                                    <!-- Start Tab - Product Review -->
                                    <div class="tab-pane " id="product-review">
                                        
                                        <!-- Start - Review Comment -->
                                        <ul class="comment">
                                           <?php 
                                                $sql1 = "SELECT * FROM binhluan JOIN khachdathang ON binhluan.makhachdathang = khachdathang.makhachdathang JOIN sanpham 
                                                    on binhluan.masanpham = sanpham.masanpham 
                                                    WHERE sanpham.masanpham =  '".$ma_san_pham."'
                                                    LIMIT 5; 
                                                ";
                                          
                                                $binh_luan =  mysqli_query($ket_noi,$sql1);
                                                $i = 0;
                                                while($row = mysqli_fetch_array($binh_luan)){
                                                $i ++;
                                           ?>
                                            <!-- Start - Review Comment list-->
                                            <li class="comment__list">                                                                                         
                                                <div class="comment__wrapper">
                                                    <div class="comment__img">
                                                            <img src="assets/img/testimonial/anh<?php echo $i?>.jpg" alt="">
                                                    </div> 
                                                    <div class="comment__content">
                                                        <div class="comment__content-top">
                                                                <div class="comment__content-left">
                                                                    <h6 class="comment__name"><?php echo $row['tenkhachdathang']?></h6>
                                                                    <ul class="product__review">
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                                </ul>
                                                                </div>   
                                                            </div>
                                                            
                                                            <div class="para__content">
                                                                <p class="para__text"><?php echo $row['noidungbinhluan']?></p>
                                                            </div> 
                                                        </div>
                                                </div>                                                                                  
                                            </li> <!-- End - Review Comment list-->
                                            <?php 
                                                }
                                                mysqli_close($ket_noi);
                                            ?>                                    
                                        </ul> <!-- End - Review Comment -->
                                
                                            <!-- Start Add Review Form-->
                                        <div class="review-form m-t-40">
                                            <?php 
                                            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                                include("config.php");
                                                $ma_san_pham = $_GET['id'];
                                                $sql = "SELECT * FROM sanpham WHERE  masanpham = '".$ma_san_pham."' ;
                                                ";
                                            ?>
                                            <div class="section-content">
                                                <h6 class="font--bold text-uppercase">ĐÁNH GIÁ CỦA BẠN</h6>
                                                <p class="section-content__desc">Địa chỉ email của bạn sẽ được bảo mật. Các trường bắt buộc được đánh dấu *</p>
                                            </div>
                                            <form class="form-box" action="binhluanthuchien.php?id=<?php echo $ma_san_pham ;?>"  method="post">
                                                <div class="row">                                                
                                                    <div class="col-12">
                                                        <div class="form-box__single-group">
                                                            <label for="form-name">Xếp hạng của bạn*</label>
                                                            <ul class="product__review">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <label for="form-name">Tên của bạn*</label>
                                                            <input type="text" id="form-name" placeholder="Nhập tên của bạn" name="txtTenKhachHang">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <label for="form-email">Địa chỉ Email*</label>
                                                            <input type="email" id="form-email" placeholder="Nhập địa chỉ email" required name="txtEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-box__single-group">
                                                            <label for="form-review">Đánh giá của bạn*</label>
                                                            <textarea id="form-review" rows="8" placeholder="Viết đánh giá" name="txtNoiDung"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Gửi</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- End Add Review Form- -->
                                        </div> <!-- Start Tab - Product Review -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Product Details Tab -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Sản phẩm liên quan
                            </h5>
                            <a href="shop.php" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem thêm<i class="fal fa-angle-right"></i></a>
                        </div> <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
                                <?php
                                    
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
                                            if($row['soluong']<=0){
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
                                                </div>';
                                            }
                                        ;?>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <?php 
                                                if($row["soluong"]!=0){
                                                    echo '
                                                        <li><a href="#" onclick="addCart('.$row["masanpham"].')" id="'.$row["masanpham"].'" class="addcart_"><i class="icon-shopping-cart"></i></a></li> 
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

    </main> <!-- :::::: End MainContainer Wrapper :::::: -->

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

    <!-- Start Modal chính sách đổi trả -->
    <div class="modal fade" id="modalSizeGuide" tabindex="-1" role="dialog" aria-hidden="true">
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
                            
                            <div class="col-12">
                                <div class="privacy-policy-section">
                                    <div class="text-area">
                                        <p class="font--bold">Dễ dàng và miễn phí, trong vòng 14 ngày</p>
                                        <p>1. Bất cứ lỗi nào về chất lượng sản phẩm: rau củ bị héo, dập; ong chích dẫn đến hư bên trong quả/củ; củ quả bị già… các sản phẩm đồ khô, sản phẩm đóng gói có lỗi khách quan như lớp màng ngăn bảo vệ sản phẩm bị rách, sữa bị vón cục, ngũ cốc và các loại hạt bị mọt… Organica mong nhận được phản hồi của các anh/chị để có cơ hội được đền bù lại các sản phẩm cùng loại hoặc hoàn tiền cho Khách hàng.</p>
                                        <p>2. Nhân viên quản lý cửa hàng nơi Khách hàng mua hàng sẽ liên lạc trực tiếp cho Khách để biết tình trạng hàng hóa và tiến hàng đổi hay hoàn tiền nhanh nhất</p>
                                        <p>3. Nếu các sản phẩm đã quá thời gian đổi trả quy định bên trên kể từ khi Quý khách mua hàng và không thuộc lỗi về chất lượng sản phẩm, Organica mong Quý khách thông cảm, chúng tôi không thể xử lý việc đổi trả.</p>
                                        <p>4. Rất mong Quý khách hàng cùng Organica kiểm tra hàng hóa kĩ lúc mua hàng để tránh nhầm lẫn và lưu ý về QUY ĐỊNH THỜI GIAN ĐỔI TRẢ HÀNG nêu trên.</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Size Guide -->

    <!-- Start Modal Shipping Info -->
    <div class="modal fade" id="modalShippinginfo" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="col-12">
                                <div class="privacy-policy-section">
                                    <div class="text-area">
                                        <h5 class="font--bold">Thông tin chung</h5>
                                        <div class="para__text">
                                            <p style="font-size: large;">Dịch vụ giao hàng của Gsore hoạt động từ 9:00 - 18:00;</p>
                                            <p style="font-size: large;">Để đảm bảo chất lượng dịch vụ và hàng hoá, đơn hàng sẽ được giao ít nhất 3 tiếng sau khi chúng tôi tiếp nhận thông tin đặt hàng từ quý khách. Những đơn hàng đặt sau 16:30 sẽ được giao vào ngày hôm sau;</p>
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <h6 class="font--bold" style="font-size: large;">Phí giao hàng thường dao động từ <b><i>20.000 - 30.000 VNĐ</b></i>. Cụ thể:</h6>
                                        <div class="para__text">
                                            <p style="font-size: large;">- Vận chuyển thông thường: 20.000 VNĐ.</p>
                                            <p style="font-size: large;">- Vận chuyển hoả tốc: 30.000 VNĐ;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Shipping Info -->

    <!-- Start Modal Product Ask -->
    <div class="modal fade" id="modalProductAsk" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="col-12">
                                <!-- Start Add Review Form-->
                                <div class="review-form m-t-30">
                                    <div class="section-content">
                                        <h6 class="font--bold text-uppercase">Câu hỏi cần trợ giúp về sản phẩm</h6>
                                        <p class="section-content__desc">Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *</p>
                                    </div>
                                    <?php 
                                        include("config.php");
                                        if(isset($_POST["addNew"])){
                                            $tentrogiup = $_POST["tentrogiup"];
                                            $emailtrogiup = $_POST["emailtrogiup"];
                                            $sdttrogiup = $_POST["sdttrogiup"];
                                            $noidungtrogiup = $_POST["noidungtrogiup"];
                                            $ngayyeucau = date("Y-m-d H:i:s");
                                            $trangthai = 0;

                                            $sqltrogiup = "INSERT INTO `trogiup` (`matrogiup`, `tentrogiup`, `emailtrogiup`, `sdttrogiup`, `noidungtrogiup`, `ngayyeucau`, `trangthai`)
                                            VALUES (NULL, '$tentrogiup', '$emailtrogiup', '$sdttrogiup', '$noidungtrogiup', '$ngayyeucau', '$trangthai')";

                                            mysqli_query($ket_noi,$sqltrogiup) or die("Lỗi câu lệnh thêm mới liên hệ");
                                        }
                                    ?>
                                    <form class="form-box" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="text" id="modal-ask-name" name="tentrogiup" placeholder="Họ tên">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="email" id="modal-ask-email" name="emailtrogiup" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="text" id="modal-ask-phone" name="sdttrogiup" placeholder="Số điện thoại" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-box__single-group">
                                                    <textarea id="modal-ask-message" name="noidungtrogiup" rows="8" placeholder="câu hỏi trợ giúp"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button name="addNew" class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Gửi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- End Add Review Form- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Product Ask -->


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
            num = $(".num_"+id).val();
            // alert(num);
            // lấy số lượng tồn trong kho
            var soluongton = Number(document.getElementById("soluongton").value);
            // thử kiểm tra kiểu dữ liệu
            // alert(soluongton);
            // alert(typeof(id));
            if(num == undefined){
                num = 1;
            }
            
            if(soluongton>=num){
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
            else {
                alert("Sản phẩm này chỉ còn " + soluongton + " sản phẩm");
            }
           
        }

        function addCartNow(id){
            // alert(id);
            // POST JQuery
            // lấy số lượng mua
            num = $(".num_"+id).val();
            if(num == undefined){
                num = 1;
            }

            // số lượng tồn trong kho
            var soluongton = Number(document.getElementById("soluongton").value);

            // alert(num);
            if(soluongton>=num){
            //    thêm số lượng mặt hàng
                $.post("shoppingCart.php",{'id':id, 'soluongmua': num}, function(data, status){
                    // cắt chuỗi ở vị trí dấu trừ
                    // item = data.split("-");
                    // qty = item[0];
                    // total = item[1];
                    $(location).attr('href','view-cart.php');
                });
            }
            else {
                alert("Sản phẩm này chỉ còn " + soluongton + " sản phẩm");
            }
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
