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
                                                <li class="dropdown__list"><a href="payment-policy.php" class="dropdown__link">Đổi trả & hoàn tiền</a></li>
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
                                <li class="dropdown__list"><a href="payment-policy.php" class="dropdown__link">Đổi trả & hoàn tiền</a></li>
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
                        <li class="page-breadcrumb__nav active">Tìm kiếm sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widget -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Filter [Catagory] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">DANH MỤC SẢN PHẨM</h5>
                            </div>
                            
                            <ul class="sidebar__menu">
                                <li>
                                    <ul class="sidebar__menu-collapse">
                                        <!-- Start Single Menu Collapse List -->
                                        
                                    </ul>
                                </li>
                                <?php 
                                    include("config.php");
                                    $search = $_GET['q'];
                                    $sql = "SELECT * 
                                            FROM loaisanpham 
                                            ";
                                    $loai_san_pham = mysqli_query($ket_noi,$sql);
                                    while ($row = mysqli_fetch_array($loai_san_pham)){
                                ;?>

                                <li><a href="search.php?q=<?php echo $search; ?>&cate=<?php echo $row["tenloaisanpham"]; ?>&supplier=&sort=&page=1"><?php echo $row["tenloaisanpham"]; ?></a></li>

                                <?php
                                }
                                mysqli_close($ket_noi);
                                ?>
                            </ul>
                        </div> <!-- End Single Sidebar Widget - Filter [Catagory] -->

                        <!-- ::::::  Start Single Sidebar Widget - Filter [Size] ::::::  -->
                        
                        <!-- Start ingle Sidebar Widget - Filter [Color] -->
                        
                        <!-- Start Single Sidebar Widget - Filter [Suppliers] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">Nhà cung cấp</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                <?php 
                                    include("config.php");
                                    $loai=isset($_GET['cate'])? $_GET['cate'] : '';
                                    $sql = "SELECT * 
                                            FROM nhacungcap 
                                            ";
                                    $nha_cung_cap = mysqli_query($ket_noi,$sql);
                                    while ($row = mysqli_fetch_array($nha_cung_cap)){
                                ;?>
                                    <!-- Start Single Menu Filter List -->
                                    <li class="sidebar__menu-filter-list">
                                        <label for="men"><input type="checkbox" <?php if(isset($_GET['supplier'])){ if(strpos($_GET['supplier'],$row["tennhacungcap"])){ echo "checked";} } ?> name="Suppliers" value="<?php echo $row["tennhacungcap"]; ?>" id="men"><span><?php echo $row["tennhacungcap"]; ?></span></label>
                                    </li> <!-- End Single Menu Filter List -->
                                <?php
                                }
                                ?>

                                <br/> 
                                <input type="button" id="btn" style="background: #79a206;  color: #fff; border: 1px solid #ebebeb;  padding: 5px 20px;" value="Lọc theo nhà cung cấp"/>
                                <br/>
                                
                                <script language="javascript">
                                    document.getElementById('btn').onclick = function()
                                    {
                                        // Khai báo tham số
                                        var checkbox = document.getElementsByName('Suppliers');
                                        var result = "";
                                        var cate = window.location.search.substring(window.location.search.indexOf("cate")+5,window.location.search.indexOf("&supplier"))
                                        
                                        // Lặp qua từng checkbox để lấy giá trị
                                        for (var i = 0; i < checkbox.length; i++){
                                            if (checkbox[i].checked === true){
                                                result += "'" + checkbox[i].value + "',";
                                            }
                                        }
                                        var string = result.substring(0,result.length-1);
                                        // In ra kết quả
                                        
                                        window.location = "search.php?q=<?php echo $search; ?>" + "&cate=<?php echo $loai; ?>" + "&supplier=" + string + "&sort=&page=1";
                                    };
                                </script>

                                <?php
                                mysqli_close($ket_noi);
                                ?>    
                            </ul>
                        </div><!-- End Single Sidebar Widget - Filter [Suppliers] -->

                        <!-- Start Single Sidebar Widget - Filter [Brand] -->
                        
                        <!-- Start Single Sidebar Widget - Filter [Price] -->
                        
                        <!-- ::::::  Start Sidebar Banner Widget  ::::::  -->
                        <div class="sidebar__widget">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sidebar__banner">
                                        <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="banner__link text-center">
                                            <img class="img-fluid" src="assets/img/banner/size-port/img-sidebar.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ::::::  End Sidebar Banner Widget  ::::::  -->

                        <!-- ::::::  Start Sidebar Widget - Top Product   ::::::  -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">SẢN PHẨM NỔI BẬT</h5>
                            </div>
                            <ul class="sidebar__post-product list-space--medium ">
                                <li class="d-flex align-items-center">
                                    <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="sidebar__product-img img-responsive">
                                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                                    </a>
                                    <div class="product__content">
                                        <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="product__link">Trứng tươi</a>
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <div class="product__price">
                                            <span class="product__price">5000 đ</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="sidebar__product-img img-responsive">
                                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="">
                                    </a>
                                    <!-- Start Product Content -->
                                    <div class="product__content">
                                        <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="product__link">Trái cây tươi</a>
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <div class="product__price">
                                            <span class="product__price">17000 đ</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </li>
                                <li class="d-flex align-items-center">
                                    <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="sidebar__product-img img-responsive">
                                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-3.jpg" alt="">
                                    </a>
                                    <!-- Start Product Content -->
                                    <div class="product__content">
                                        <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="product__link">Nước ép tự nhiên</a>
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <div class="product__price">
                                            <span class="product__price">25000 đ</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </li>
                            </ul>
                        </div> <!-- ::::::  End Sidebar Widget - Top Product  ::::::  -->

                        <!-- ::::::  Start Sidebar Widget - Tag  ::::::  -->
                        
                    </div>
                </div> <!-- End Left Sidebar Widget -->

                <!-- Start Rightside - Product Type View -->
                <div class="col-lg-9">
                    <div class="img-responsive">
                        <img src="assets/img/banner/size-wide/banner-shop-1-img-1-wide.jpg" alt="">
                    </div>
                    <!-- ::::::  Start Sort Box Section  ::::::  -->
                    <h5>Kết quả tìm kiếm cho '<?php echo $_GET['q']?>'</h5>
                    <div class="sort-box m-tb-40">
                        <!-- Start Sort Left Side -->
                        <div class="sort-box-item">
                            <div class="sort-box__tab">
                                <ul class="sort-box__tab-list nav">
                                    <li><a class="sort-nav-link active" data-bs-toggle="tab" href="#sort-grid"><i class="fas fa-th"></i> </a></li>
                                    <li><a class="sort-nav-link" data-bs-toggle="tab" href="#sort-list"><i class="fas fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- Start Sort Left Side -->

                        <div class="sort-box-item d-flex align-items-center flex-warp">
                            <span>Sắp xếp theo:</span>
                            <?php
                                include("config.php");
                                #Lấy ID của page
                                $page = isset($_GET["page"])? $_GET["page"] : '';
                                $loai = isset($_GET['cate'])? $_GET['cate'] : '';
                                $ncc = isset($_GET['supplier'])? $_GET['supplier'] : '';
                                $sapxep = isset($_GET['sort'])? $_GET['sort'] : '';
                                $search = $_GET['q'];
                            ?>
                            <div class="sort-box__option">
                                <label class="select-sort__arrow">
                                    <select name="select-sort" class="select-sort" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        
                                        <option value="shop.php?cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=&page=1" <?php if($sapxep=='') echo "selected"; ?>>Liên quan</option>
                                        <option value="shop.php?cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=tensanpham &page=1" <?php if($sapxep=='tensanpham ') echo "selected"; ?>>Tên, A tới Z</option>
                                        <option value="shop.php?cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=tensanpham DESC &page=1" <?php if($sapxep=='tensanpham DESC ') echo "selected"; ?>>Tên, Z tới A </option>
                                        <option value="shop.php?cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=dongia &page=1" <?php if($sapxep=='dongia ') echo "selected"; ?>>Giá, thấp đến cao</option>
                                        <option value="shop.php?cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=dongia DESC &page=1" <?php if($sapxep=='dongia DESC ') echo "selected"; ?>>Giá, cao đến thấp</option>
                                        <option value="shop.php?cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=masanpham&page=1" <?php if($sapxep=='masanpham') echo "selected"; ?>>Bán chạy</option>
                                    </select>
                                </label>
                            </div>
                            <?php
                                mysqli_close($ket_noi);
                            ?>
                        </div>
                        
                        <!-- Hiển thị số lượng kết quả -->
                        <?php 
                            include("config.php");
                            $id = isset($_GET["page"])? $_GET["page"] : '';
                            $loai = isset($_GET['cate'])? $_GET['cate'] : '';
                            $ncc = isset($_GET['supplier'])? $_GET['supplier'] : '';
                            $sapxep = isset($_GET['sort'])? $_GET['sort'] : '';
                            $search = $_GET['q'];

                            $sql = "SELECT count(masanpham) as 'total' 
                                    FROM sanpham JOIN loaisanpham ON sanpham.maloaisanpham = loaisanpham.maloaisanpham 
                                        LEFT JOIN khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                        JOIN nhacungcap on sanpham.manhacungcap = nhacungcap.manhacungcap
                                    WHERE tensanpham LIKE '%" .$search ."%' 
                                    ";
                            if ($loai=='') {
                                $sql = $sql ."AND tenloaisanpham NOT IN ('') ";
                            } else{
                                $sql = $sql ."AND tenloaisanpham LIKE '" .$loai ."%' ";
                            }
                            if ($ncc=='') {
                                $sql = $sql ."AND tennhacungcap NOT IN ('') ";
                            } else{
                                $sql = $sql ."AND tennhacungcap IN(".$ncc .")";
                            }
                            $sql = $sql ." GROUP BY masanpham";
                            
                            $san_pham = mysqli_query($ket_noi,$sql);
                            $so_luong = mysqli_num_rows($san_pham);
                            
                        ;?>
                        <div class="sort-box-item">
                            <!-- Kiểm tra xem có id page không? | Kiểm tra xem URL trang là .../shop.php và không có giá trị ? hay không -->
                            <span>Hiển thị <?php if($so_luong==0){ echo 0;} else{ if (isset($_GET["page"])){ echo ($id-1) * 9 + 1; echo " - "; if($id * 9 <= $so_luong){ echo ($id * 9); } else{ echo $so_luong;}} else{ echo 1 ." - "; if ($so_luong>9){ echo 9;} else { echo $so_luong;}} } ?> trong <?php echo $so_luong;?> kết quả</span>
                        </div>
                       
                    </div>
                    
                    <!-- ::::::  Start Sort Box Section  ::::::  -->
                    <div class="product-tab-area">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane show active shop-grid" id="sort-grid">
                                <div class="row">
                                    <?php 
                                        include("config.php");
                                        $id = isset($_GET["page"])? $_GET["page"] : '';
                                        $loai = isset($_GET['cate'])? $_GET['cate'] : "";
                                        $ncc = isset($_GET['supplier'])? $_GET['supplier'] : "";
                                        $search = $_GET['q'];

                                        $sql = "SELECT masanpham, tensanpham, sanpham.maloaisanpham, tenloaisanpham, sanpham.anh, giamgia,thoihan, dongia, sanpham.manhacungcap, tennhacungcap 
                                                FROM sanpham JOIN loaisanpham ON sanpham.maloaisanpham = loaisanpham.maloaisanpham 
                                                    LEFT JOIN khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                                    JOIN nhacungcap on sanpham.manhacungcap = nhacungcap.manhacungcap
                                                WHERE tensanpham LIKE '%" .$search ."%' AND masanpham >= (($id-1) * 9 + 1) 
                                                ";
                                        if ($loai=='') {
                                            $sql = $sql ."AND tenloaisanpham NOT IN ('') ";
                                        } else{
                                            $sql = $sql ."AND tenloaisanpham LIKE '" .$loai ."' ";
                                        }
                                        if ($ncc=='') {
                                            $sql = $sql ."AND tennhacungcap NOT IN ('') ";
                                        } else{
                                            $sql = $sql ."AND tennhacungcap IN(".$ncc .")";
                                        }
                                        if ($sapxep == '') {
                                            $sql = $sql ."ORDER BY masanpham ";
                                        } else {
                                            $sql = $sql ."ORDER BY " .$sapxep;
                                        }
                                        
                                        $sql = $sql ." LIMIT 9 ;";
                                        
                                        $san_pham = mysqli_query($ket_noi,$sql);
                                        $so_luong = mysqli_num_rows($san_pham);
                                        if ($so_luong != 0){
                                            $so_trang=ceil($so_luong/9);
                                            while($row = mysqli_fetch_array($san_pham)){

                                    ;?>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="product__img--link">
                                                    <img class="product__img img-fluid" src="<?php echo 'assets/img/product/size-normal/'.$row['anh'];?>" alt="">
                                                </a>
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
                                                    <li><a href="#" id="<?php echo $row['masanpham']?>" class="addWishList" onclick="addWishList(<?php echo $row['masanpham']?>)"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#" onclick="addCart(<?php echo $row['masanpham']?>)" id="<?php echo $row['masanpham']?>" class="addcartbtn"><i class="icon-shopping-cart"></i></a></li>
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
                                                <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="product__link"><?php echo $row['tensanpham'];?></a>
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
                                        </div> <!-- End Single List Product -->
                                    </div> <!-- End Single Default Product -->
                                    <?php
                                            }
                                        } else echo "&emsp;Không có sản phẩm phù hợp với yêu cầu của bạn";
                                        #Đóng kết nối
                                        mysqli_close($ket_noi);
                                    ;?>
                                </div>
                            </div>
                            <!-- Phần list view -->
                            <div class="tab-pane shop-list" id="sort-list">
                                <div class="row">
                                    <?php 
                                        include("config.php");
                                        $id = isset($_GET["page"])? $_GET["page"] : '';
                                        $loai = isset($_GET['cate'])? $_GET['cate'] : '';
                                        $ncc = isset($_GET['supplier'])? $_GET['supplier'] : '';
                                        $sapxep = isset($_GET['sort'])? $_GET['sort'] : '';
                                        $search = $_GET['q'];

                                        $sql = "SELECT masanpham, tensanpham, sanpham.maloaisanpham, tenloaisanpham, sanpham.anh,thoihan, mota, giamgia, dongia, sanpham.manhacungcap, tennhacungcap 
                                                FROM sanpham JOIN loaisanpham ON sanpham.maloaisanpham = loaisanpham.maloaisanpham 
                                                    LEFT JOIN khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                                    JOIN nhacungcap on sanpham.manhacungcap = nhacungcap.manhacungcap
                                                WHERE tensanpham LIKE '%" .$search ."%' AND masanpham >= (($id-1) * 9 + 1) 
                                                ";
                                        if ($loai=='') {
                                            $sql = $sql ."AND tenloaisanpham NOT IN ('') ";
                                        } else{
                                            $sql = $sql ."AND tenloaisanpham LIKE '" .$loai ."' ";
                                        }
                                        if ($ncc=='') {
                                            $sql = $sql ."AND tennhacungcap NOT IN ('') ";
                                        } else{
                                            $sql = $sql ."AND tennhacungcap IN(".$ncc .")";
                                        }
                                        if ($sapxep == '') {
                                            $sql = $sql ."ORDER BY masanpham ";
                                        } else {
                                            $sql = $sql ."ORDER BY " .$sapxep;
                                        }
                                        
                                        $sql = $sql ."LIMIT 9 ;";
                                        
                                        $san_pham = mysqli_query($ket_noi,$sql);
                                        $so_luong = mysqli_num_rows($san_pham);
                                        if ($so_luong != 0){
                                            $so_trang=ceil($so_luong/9);
                                            while($row = mysqli_fetch_array($san_pham)){

                                    ;?>
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="product__img--link">
                                                    <img class="product__img img-fluid" src="<?php echo 'assets/img/product/size-normal/'.$row['anh'];?>" alt="">
                                                </a>
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
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.php?id=<?php echo $row["masanpham"];?>" class="product__link">
                                                    <h5 class="font--regular"><?php echo $row['tensanpham'];?></h5>
                                                </a>
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
                                                <div class="product__desc"><?php echo $row['mota'];?></div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#" id="<?php echo $row['masanpham']?>" class="addWishList" onclick="addWishList(<?php echo $row['masanpham']?>)"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#" onclick="addCart(<?php echo $row['masanpham']?>)" id="<?php echo $row['masanpham']?>" class="addcartbtn"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="#" id="<?php echo $row['masanpham']?>" class="view_btn"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div>
                                    </div> <!-- End Single List Product -->
                                    <?php 
                                            }
                                        } else echo "&emsp;Không có sản phẩm phù hợp với yêu cầu của bạn";
                                        mysqli_close($ket_noi);
                                    ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- phần chỉnh next ,  back trang -->
                    <div class="page-pagination">
                        <ul class="page-pagination__list tablist tablist--style-blue tablist--style-gap-20 nav">
                            
                            <?php 
                                include("config.php");
                                #Lấy ID của page
                                $page = isset($_GET["page"])? $_GET["page"] : '';
                                $loai = isset($_GET['cate'])? $_GET['cate'] : '';
                                $ncc = isset($_GET['supplier'])? $_GET['supplier'] : '';
                                $sapxep = isset($_GET['sort'])? $_GET['sort'] : '';
                                $search = $_GET['q'];
                                
                                $sql = "SELECT *
                                    FROM sanpham JOIN loaisanpham ON sanpham.maloaisanpham = loaisanpham.maloaisanpham 
                                        LEFT JOIN khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai
                                        JOIN nhacungcap on sanpham.manhacungcap = nhacungcap.manhacungcap
                                    WHERE tensanpham LIKE '%" .$search ."%' 
                                    "; 
                                if ($loai == '') {
                                    $sql = $sql ."AND tenloaisanpham NOT IN ('') ";
                                } else{
                                    $sql = $sql ."AND tenloaisanpham LIKE '" .$loai ."%' ";
                                }
                                if ($ncc == '') {
                                    $sql = $sql ."AND tennhacungcap NOT IN ('') ";
                                } else{
                                    $sql = $sql ."AND tennhacungcap IN(".$ncc .") ";
                                }
                                if ($sapxep != '') {
                                    $sql = $sql ."ORDER BY " .$sapxep;
                                }                                 
                                
                                $san_pham = mysqli_query($ket_noi,$sql);
                                $so_luong = mysqli_num_rows($san_pham);
                                if ($so_luong != 0){
                                    $so_trang=ceil($so_luong/9);
                                
                            ;?>
                                                        
                            <li class="page-pagination__item"><a class="page-pagination__link" href="<?php if (isset($_GET["page"])){ if($page==1){ echo '#';} else{ echo 'shop.php?cate=' .$loai .'&supplier=' .$ncc .'&sort=' .$sapxep .'&page='; echo $page-1;}} else{ echo '#';} ?> ">Trang trước</a></li>
                                                        
                            <?php
                                if ($page == '' && $loai == '' && $ncc == '' & $sapxep == ''){
                                ;?>
                                <li class="page-pagination__item"><a class="page-pagination__link active" href="shop.php?cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=<?php echo $sapxep;?>&page=1" >1</a></li>
                            <?php
                                    $i=1;
                                } else {
                                    $i=0;
                                }
                                
                                while ($i != $so_trang){
                                    if (++$i == $page){
                            ;?>
                                <li class="page-pagination__item"><a class="page-pagination__link active" href="search.php?q=<?php echo $search; ?>&cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=<?php echo $sapxep;?>&page=<?php echo $i;?>" ><?php echo $i;?></a></li>
                            <?php
                            } else{
                            ?>
                                <li class="page-pagination__item"><a class="page-pagination__link" href="search.php?q=<?php echo $search; ?>&cate=<?php echo $loai;?>&supplier=<?php echo $ncc;?>&sort=<?php echo $sapxep;?>&page=<?php echo $i;?>"><?php echo $i;?></a></li>
                            
                            <?php
                                }
                            }
                            ?>
                            <li class="page-pagination__item"><a class="page-pagination__link" href="
                                <?php 
                                    if (isset($_GET["page"])){
                                        if($page==$so_trang){ 
                                            echo '#';
                                        } else{ 
                                            echo 'search.php?q=' .$search .'&cate=' .$loai.'&supplier=' .$sapxep.'&sort=&page='; 
                                            echo $page+1;
                                        } 
                                    } else {
                                        echo 'search.php?q=' .$search .'&cate=' .$loai.'&supplier=' .$sapxep.'&sort=&page=2'; 
                                    }
                                ?> ">Trang sau</a></li>
                            
                            <?php
                            }
                            mysqli_close($ket_noi);
                            ?>
                        </ul> 
                    </div>
                </div>
             
            </div>
                </div> <!-- Start Rightside - Product Type View -->
            </div>
        </div>
    </main> <!-- :::::: End Main Container Wrapper :::::: -->

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
                         <!-- Start Footer Payment Logo -->
                        <div class="footer__payment">
                            <a href="#" class="footer__payment-link">
                                <img src="assets/img/company-logo/payment.png" alt="" class="footer__payment-img">
                            </a>
                        </div>  <!-- End Footer Payment Logo -->
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
search.php
1
Displaying search.php.