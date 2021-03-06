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

    <!-- Th?? vi???n n??y ????? hi???n th??? ??c modal t????ng ??ng v???i masanpham -->
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
                                            <a href="index.php" class="header__nav-link">Trang ch???</a>
                                        </li> <!-- End Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="shop.php" class="header__nav-link">C???a h??ng</a>
                                            <span class="menu-label menu-label--red">New</span>
                                        </li> <!-- Start Single Nav link-->
            
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="blog-grid-sidebar-left.php" class="header__nav-link">Tin t???c</a>
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Gi???i thi???u <i class="fal fa-chevron-down"></i></a>
                                            <span class="menu-label menu-label--blue">New</span>
                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">
                                            <li class="dropdown__list"><a href="about.php" class="dropdown__link">V??? ch??ng t??i</a></li>
                                                <li class="dropdown__list"><a href="privacy-policy.php" class="dropdown__link">Ch??nh s??ch b???o m???t</a></li>
                                                <li class="dropdown__list"><a href="return-and-refund-policy.php" class="dropdown__link">?????i tr??? & ho??n ti???n</a></li>
                                                <li class="dropdown__list"><a href="shipping-policy.php" class="dropdown__link">Giao h??ng & v???n chuy???n</a></li>
                                                <li class="dropdown__list"><a href="frequently-questions.php" class="dropdown__link">C??u h???i th?????ng g???p</a></li>
                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li> <!-- End Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                                <a href="contact.php" class="header__nav-link">Li??n h???</a>
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
                                <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>DANH M???C</h4>
                                <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="search.php?q=">T??m ki???m s???n ph???m</a></li>
                                    <li class="menu-item"><a href="shop.php">Gian h??ng</a></li>
                                    <li class="menu-item"><a href="shipping-policy.php"> Giao h??ng v?? v???n chuy???n</a></li>
                                    <li class="menu-item"><a href="return-and-refund-policy.php">?????i tr??? v?? ho??n ti???n</a></li>
                                    <li class="menu-item"><a href="frequently-questions.php">Tr??? gi??p v?? c??u h???i th?????ng g???p</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <form class="header-search" action="search.php" method="get">
                                <div class="header-search__content pos-relative">
                                    <input type="search"  name="q" placeholder="T??m ki???m s???n ph???m t???i c???a h??ng" required>
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
                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>DANH M???C</h4>
                                <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="search.php?q=">T??m ki???m s???n ph???m</a></li>
                                    <li class="menu-item"><a href="shop.php">Gian h??ng</a></li>
                                    <li class="menu-item"><a href="shipping-policy.php"> Giao h??ng v?? v???n chuy???n</a></li>
                                    <li class="menu-item"><a href="return-and-refund-policy.php">?????i tr??? v?? ho??n ti???n</a></li>
                                    <li class="menu-item"><a href="frequently-questions.php">Tr??? gi??p v?? c??u h???i th?????ng g???p</a></li>
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
                        <li><a href="index.php"><span>Trang ch???</span></a></li>
                        <li>
                            <a href="shop.php"><span>C???a h??ng</span></a>
                            <a href="blog-grid-sidebar-left.php"><span>Tin t???c</span></a>
                        </li>
                        <li>
                            <a href="#"><span>Gi???i thi???u</span></a>
                            <ul class="sub-menu">
                            <li class="dropdown__list"><a href="about.php" class="dropdown__link">V??? ch??ng t??i</a></li>
                                <li class="dropdown__list"><a href="privacy-policy.php" class="dropdown__link">Ch??nh s??ch b???o m???t</a></li>
                                <li class="dropdown__list"><a href="return-and-refund-policy.php" class="dropdown__link">?????i tr??? & ho??n ti???n</a></li>
                                <li class="dropdown__list"><a href="shipping-policy.php" class="dropdown__link">Giao h??ng & v???n chuy???n</a></li>
                                <li class="dropdown__list"><a href="frequently-questions.php" class="dropdown__link">C??u h???i th?????ng g???p</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Li??n h???</a></li>
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
                        <li class="page-breadcrumb__nav"><a href="index.php">Trang ch???</a></li>
                        <li class="page-breadcrumb__nav active">Chi ti???t s???n ph???m</li>
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
                                            echo '<span class="product_price">'.$gia_da_giam.' ??'.' <del>'.$row["dongia"].' ??</del></span>';
                                        }
                                        else {
                                            echo '<span class="product_price">'.$row["dongia"].' ??</span>';
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
                                            echo '<span class="product__stock--in"><i class="fas fa-check-circle"></i>[C??n '.$row['soluong'].' s???n ph???m]</span>';
                                        }
                                        else {
                                            echo '<span class="product__stock--in"><i class="fas fa-check-circle"></i>[H???t h??ng]</span>';
                                        }
                                    ;?>
                                    
                                </div>
                                <div class="product-quantity product-var__item">
                                    <ul class="product-modal-group">
                                        <li><a href="#modalSizeGuide" data-bs-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-money-check-edit"></i>Ch??nh s??ch ?????i tr???</a></li>
                                        <li><a href="#modalShippinginfo" data-bs-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Ch??nh s??ch v???n chuy???n</a></li>
                                        <li><a href="#modalProductAsk" data-bs-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Tr??? gi??p v??? s???n ph???m</a></li>
                                    </ul>
                                </div>
                                
                                <div class="product-quantity product-var__item d-flex align-items-center">
                                    <span class="product-var__text">S??? l?????ng: </span>
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
                                                <a href="#" onclick="addCart('.$row["masanpham"].')" id="'.$row["masanpham"].'" class="addcartbtn btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Th??m v??o gi??? h??ng</a>
                                            ';
                                        }
                                        else {
                                            echo '
                                                <a href="#" class="addcartbtn btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">S???n ph???m ???? b??n h???t</a>
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
                                                    <label for="buy-now-check" class="m-b-20">Ng???i g?? kh??ng mua ngay s???n ph???m n??y</label>
                                                    <a href="#" onclick="addCartNow('.$row['masanpham'].')" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Mua ngay</a>
                                                ';
                                            }
                                            else {
                                                echo '
                                                    <label for="buy-now-check" class="m-b-20">S???n ph???m n??y t???m h???t h??ng.</label>
                                                ';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-var__item">
                                    <span class="product-var__text">Ph????ng th???c thanh to??n</span>
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
                                    <span class="product-var__text">Chia s???: </span>
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
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#product-desc">M?? t??? s???n ph???m</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#product-dis">Th??ng tin chi ti???t</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#product-review">????nh gi??</a></li>
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
                                                            <td class="product-dis__title">T??n nh?? cung c???p</td>
                                                            <td class="product-dis__text"><?php echo $row['tennhacungcap']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="product-dis__title">?????a ch??? nh?? cung c???p</td>
                                                            <td class="product-dis__text"><?php echo $row['diachinhacungcap']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="product-dis__title">T??n lo???i s???n ph???m</td>
                                                            <td class="product-dis__text"><?php echo $row['tenloaisanpham']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="product-dis__title">Th??ng tin khuy???n m??i</td>
                                                            <td class="product-dis__text">
                                                                <?php 
                                                                    if($row['giamgia']!=0){
                                                                        echo "??ang ???????c gi???m gi??";
                                                                    }
                                                                    else{
                                                                        echo "Kh??ng ???????c gi???m gi??";
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
                                            // 1. Load file c???u h??nh ????? k???t n???i ?????n m??y ch??? CSDL, CSDL
                                                include("config.php");
                                                $ma_san_pham = $_GET['id'];
                                                $sql = "SELECT * FROM sanpham WHERE  masanpham = '".$ma_san_pham."' ;
                                                ";
                                            ?>
                                            <div class="section-content">
                                                <h6 class="font--bold text-uppercase">????NH GI?? C???A B???N</h6>
                                                <p class="section-content__desc">?????a ch??? email c???a b???n s??? ???????c b???o m???t. C??c tr?????ng b???t bu???c ???????c ????nh d???u *</p>
                                            </div>
                                            <form class="form-box" action="binhluanthuchien.php?id=<?php echo $ma_san_pham ;?>"  method="post">
                                                <div class="row">                                                
                                                    <div class="col-12">
                                                        <div class="form-box__single-group">
                                                            <label for="form-name">X???p h???ng c???a b???n*</label>
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
                                                            <label for="form-name">T??n c???a b???n*</label>
                                                            <input type="text" id="form-name" placeholder="Nh???p t??n c???a b???n" name="txtTenKhachHang">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <label for="form-email">?????a ch??? Email*</label>
                                                            <input type="email" id="form-email" placeholder="Nh???p ?????a ch??? email" required name="txtEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-box__single-group">
                                                            <label for="form-review">????nh gi?? c???a b???n*</label>
                                                            <textarea id="form-review" rows="8" placeholder="Vi???t ????nh gi??" name="txtNoiDung"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">G???i</button>
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
                            <h5 class="section-content__title">S???n ph???m li??n quan
                            </h5>
                            <a href="shop.php" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem th??m<i class="fal fa-angle-right"></i></a>
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
                                                echo '<span class="product__label product__label--sale-out">H???t h??ng</span>';                                                               
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
                                                    echo '<span class="product_price">'.$gia_da_giam.' ??'.' <del>'.$row["dongia"].' ??</del></span>';
                                                
                                                }
                                                else {
                                                    echo '<span class="product_price">'.$row["dongia"].' ??</span>';
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
                                <li class="footer__address-item"><i class="fa fa-home"></i>?????a ch???: 12 Ch??a B???c, Q. ?????ng ??a, H?? N???i, Vi???t Nam</li>
                                <li class="footer__address-item"><i class="fa fa-phone-alt"></i>+84 9999 9999</li>
                                <li class="footer__address-item"><i class="fa fa-envelope"></i>support@gsoreoriganicfood.com</li>
                            </ul>
                        </div>
                    </div> 
                    
                    <div class="col-lg-4 col-md-5">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">Th???i gian m??? c???a</h4>
                            <ul class="footer__nav">
                                <li class="footer__list">Th??? 2 - Th??? 6: 8h - 22h</li>
                                <li class="footer__list">Th??? 7: 9h - 20h</li>
                                <li class="footer__list">Ch??? nh???t: 14h - 18h</li>
                                <li class="footer__list">Ch??ng t??i l??m vi???c t???t c??? c??c ng??y l???</li>
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
                            <p>B???n quy???n &copy; <a href="https://gsoreoriganicfood.com/">Gsore Origanic Food</a>. ???? ????ng k?? B???n quy???n</p>
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

    <!-- Start Modal ch??nh s??ch ?????i tr??? -->
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
                                        <p class="font--bold">D??? d??ng v?? mi???n ph??, trong v??ng 14 ng??y</p>
                                        <p>1. B???t c??? l???i n??o v??? ch???t l?????ng s???n ph???m: rau c??? b??? h??o, d???p; ong ch??ch d???n ?????n h?? b??n trong qu???/c???; c??? qu??? b??? gi????? c??c s???n ph???m ????? kh??, s???n ph???m ????ng g??i c?? l???i kh??ch quan nh?? l???p m??ng ng??n b???o v??? s???n ph???m b??? r??ch, s???a b??? v??n c???c, ng?? c???c v?? c??c lo???i h???t b??? m???t??? Organica mong nh???n ???????c ph???n h???i c???a c??c anh/ch??? ????? c?? c?? h???i ???????c ?????n b?? l???i c??c s???n ph???m c??ng lo???i ho???c ho??n ti???n cho Kh??ch h??ng.</p>
                                        <p>2. Nh??n vi??n qu???n l?? c???a h??ng n??i Kh??ch h??ng mua h??ng s??? li??n l???c tr???c ti???p cho Kh??ch ????? bi???t t??nh tr???ng h??ng h??a v?? ti???n h??ng ?????i hay ho??n ti???n nhanh nh???t</p>
                                        <p>3. N???u c??c s???n ph???m ???? qu?? th???i gian ?????i tr??? quy ?????nh b??n tr??n k??? t??? khi Qu?? kh??ch mua h??ng v?? kh??ng thu???c l???i v??? ch???t l?????ng s???n ph???m, Organica mong Qu?? kh??ch th??ng c???m, ch??ng t??i kh??ng th??? x??? l?? vi???c ?????i tr???.</p>
                                        <p>4. R???t mong Qu?? kh??ch h??ng c??ng Organica ki???m tra h??ng h??a k?? l??c mua h??ng ????? tr??nh nh???m l???n v?? l??u ?? v??? QUY ?????NH TH???I GIAN ?????I TR??? H??NG n??u tr??n.</p>
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
                                        <h5 class="font--bold">Th??ng tin chung</h5>
                                        <div class="para__text">
                                            <p style="font-size: large;">D???ch v??? giao h??ng c???a Gsore ho???t ?????ng t??? 9:00 - 18:00;</p>
                                            <p style="font-size: large;">????? ?????m b???o ch???t l?????ng d???ch v??? v?? h??ng ho??, ????n h??ng s??? ???????c giao ??t nh???t 3 ti???ng sau khi ch??ng t??i ti???p nh???n th??ng tin ?????t h??ng t??? qu?? kh??ch. Nh???ng ????n h??ng ?????t sau 16:30 s??? ???????c giao v??o ng??y h??m sau;</p>
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <h6 class="font--bold" style="font-size: large;">Ph?? giao h??ng th?????ng dao ?????ng t??? <b><i>20.000 - 30.000 VN??</b></i>. C??? th???:</h6>
                                        <div class="para__text">
                                            <p style="font-size: large;">- V???n chuy???n th??ng th?????ng: 20.000 VN??.</p>
                                            <p style="font-size: large;">- V???n chuy???n ho??? t???c: 30.000 VN??;</p>
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
                                        <h6 class="font--bold text-uppercase">C??u h???i c???n tr??? gi??p v??? s???n ph???m</h6>
                                        <p class="section-content__desc">?????a ch??? email c???a b???n s??? kh??ng ???????c c??ng b???. C??c tr?????ng b???t bu???c ???????c ????nh d???u *</p>
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

                                            mysqli_query($ket_noi,$sqltrogiup) or die("L???i c??u l???nh th??m m???i li??n h???");
                                        }
                                    ?>
                                    <form class="form-box" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="text" id="modal-ask-name" name="tentrogiup" placeholder="H??? t??n">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="email" id="modal-ask-email" name="emailtrogiup" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="text" id="modal-ask-phone" name="sdttrogiup" placeholder="S??? ??i???n tho???i" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-box__single-group">
                                                    <textarea id="modal-ask-message" name="noidungtrogiup" rows="8" placeholder="c??u h???i tr??? gi??p"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button name="addNew" class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">G???i</button>
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

    <!-- l???y ??c masanpham t????ng ???ng khi mu???n hi???n modal -->
    <script type="text/javascript" language="javascript">  
        $(document).ready(function () {
            $('.view_btn').click(function(e){
                e.preventDefault();
                // alert('hello');
                // l???y gi?? tr??? c???a id
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
            // l???y s??? l?????ng mua
            num = $(".num_"+id).val();
            // alert(num);
            // l???y s??? l?????ng t???n trong kho
            var soluongton = Number(document.getElementById("soluongton").value);
            // th??? ki???m tra ki???u d??? li???u
            // alert(soluongton);
            // alert(typeof(id));
            if(num == undefined){
                num = 1;
            }
            
            if(soluongton>=num){
                //    th??m s??? l?????ng m???t h??ng
                $.post("shoppingCart.php",{'id':id, 'soluongmua':num}, function(data, status){
                    // c???t chu???i ??? v??? tr?? d???u tr???
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
                alert("S???n ph???m n??y ch??? c??n " + soluongton + " s???n ph???m");
            }
           
        }

        function addCartNow(id){
            // alert(id);
            // POST JQuery
            // l???y s??? l?????ng mua
            num = $(".num_"+id).val();
            if(num == undefined){
                num = 1;
            }

            // s??? l?????ng t???n trong kho
            var soluongton = Number(document.getElementById("soluongton").value);

            // alert(num);
            if(soluongton>=num){
            //    th??m s??? l?????ng m???t h??ng
                $.post("shoppingCart.php",{'id':id, 'soluongmua': num}, function(data, status){
                    // c???t chu???i ??? v??? tr?? d???u tr???
                    // item = data.split("-");
                    // qty = item[0];
                    // total = item[1];
                    $(location).attr('href','view-cart.php');
                });
            }
            else {
                alert("S???n ph???m n??y ch??? c??n " + soluongton + " s???n ph???m");
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
