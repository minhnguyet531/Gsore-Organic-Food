<?php 
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
    session_start();

    if(!isset($_SESSION['da_dang_nhap'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dangnhap.php';
            </script>
        ";
    }
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gsore | Quản trị hệ thống</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.php">Gsore Origanic Food </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                  <div class="form-control"><?php  echo $_SESSION['ten_nguoi_dung'];?>  </div>                 
                </div> 
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dangky.php">Đăng Ký</a></li>
                        <li><a class="dropdown-item" href="dangxuat.php">Đăng Xuất</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav" >
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Hệ thống</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Bảng điều khiển
                            </a>                           
                            <a class="nav-link collapsed" href="nguoidung.php" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Quản trị người dùng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="nguoidung.php"> Người dùng</a>   
                                    <a class="nav-link" href="dangky.php">  Đăng Ký</a>
                                    <a class="nav-link" href="dangxuat.php">Đăng Xuất</a>                                   
                                </nav>
                            </div>
                            <a class="nav-link" href="tintuc.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                    Quản trị tin tức
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                Quản trị sản phẩm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="sanpham.php"> Sản phẩm</a>                                                            
                                    <a class="nav-link" href="loaisanpham.php">Loại sản phẩm</a> 
                                    <a class="nav-link" href="nhacungcap.php">Nhà cung cấp</a>                                
                                </nav>
                            </div>
                            <a class="nav-link" href="khachhang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Quản trị khách hàng
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Quản trị bán hàng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="hoadon.php"> Hoá đơn</a>                                                            
                                    <a class="nav-link" href="phuong-thuc-thanh-toan.php">Phương thức thanh toán</a>  
                                    <a class="nav-link" href="khuyenmai.php">Khuyến mãi</a>                                 
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Quản trị yêu cầu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="lien-he.php"> Liên hệ</a>                                                            
                                    <a class="nav-link" href="tro-giup.php">Trợ giúp</a>             
                                </nav>
                            </div>
                            <a class="nav-link" href="binhluan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                                Quản trị bình luận
                            </a>                                                     
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Đã đăng nhập</div>
                    </div>
                </nav>
            </div>
            <?php
           
             // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
             include("../config.php");
             // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
             $ma_san_pham = $_GET["id"];
             $sql = "
                       SELECT *
                       FROM sanpham
                       WHERE masanpham = '".$ma_san_pham."'  ;
             ";
 
             // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
             $san_pham= mysqli_query($ket_noi, $sql);
 
                // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                $row = mysqli_fetch_array($san_pham);
            ;?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Cập nhật sản phẩm</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="sanphamsuathuchien.php" enctype="multipart/form-data">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="txtTenSanPham" type="text" placeholder="Tên Sản Phẩm" name="txtTenSanPham" value="<?php echo $row["tensanpham"];?>" />
                                                <label for="txtTenSanPham">Tên Sản Phẩm</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <tr>
                                                    <td for="txtMaLoaiSanPham">Mã Loại Sản Phẩm</td>
                                                    <td><select name="txtMaLoaiSanPham">
                                                        <?php 
                                                        include("../config.php");
                                                        $sql = "SELECT * 
                                                                FROM loaisanpham 
                                                                ";
                                                        $san_pham = mysqli_query($ket_noi,$sql);
                                                        $i = 0;
                                                        while($row = mysqli_fetch_array($san_pham)){
                                                            $i++;

                                                            ;?>
                                                                <option value="<?php echo $row["maloaisanpham"];?>"><?php echo $row["maloaisanpham"];?></option>
                                                                <?php
                                                        }
                                                        //Đóng kết nối
                                                      
                                                        ;?>
                                                    </select>
                                                    </td>
                                                </tr>
                                            <br>
                                            </div>
                                            <?php
           
                                            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                            include("../config.php");
                                            // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                                            $ma_san_pham = $_GET["id"];
                                            $sql = "
                                                        SELECT *
                                                        FROM sanpham
                                                        WHERE masanpham = '".$ma_san_pham."'  ;
                                            ";

                                            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                                            $san_pham= mysqli_query($ket_noi, $sql);

                                                // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                                                $row = mysqli_fetch_array($san_pham);
                                            ;?>
                                            <div class="form-floating mb-3">
                                            <input class="form-control" placeholder="Số Lượng" name="txtSoLuong" id="txtSoLuong" value="<?php echo $row["soluong"];?>"/>                                              
                                                <label for="txtSoLuong">Số Lượng</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <input class="form-control" placeholder="Đơn Giá" name="txtDonGia" id="txtDonGia" value="<?php echo $row["dongia"];?>"/>                                              
                                                <label for="txtDonGia">Đơn Giá</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <input class="form-control" placeholder="Ảnh"  type="file" name="txtAnh" id="txtAnh" value="<?php echo $row["anh"];?>"/>                                              
                                                <label for="txtAnh">Ảnh</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                 <input class="form-control" placeholder="Mô Tả" name="txtMoTa" id="txtMoTa" value="<?php echo $row["mota"];?>"/>                                              
                                                <label for="txtMoTa">Mô Tả</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">                                               
                                                <tr>
                                                    <td for="txtMaNhaCungCap">Mã Nhà Cung Cấp</td>
                                                    <td><select name="txtMaNhaCungCap">
                                                        <?php 
                                                        include("../config.php");
                                                        $sql = "SELECT * 
                                                                FROM nhacungcap 
                                                                ";
                                                        $san_pham = mysqli_query($ket_noi,$sql);
                                                        $i = 0;
                                                        while($row = mysqli_fetch_array($san_pham)){
                                                            $i++;

                                                            ;?>
                                                                <option value="<?php echo $row["manhacungcap"];?>"><?php echo $row["manhacungcap"];?></option>
                                                                <?php
                                                        }
                                                        //Đóng kết nối
                                                        mysqli_close($ket_noi);
                                                        ;?>
                                                    </select>
                                                    </td>
                                                </tr>
                                            <br>
                                            </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">                                               
                                                <tr>
                                                    <td for="txtMaKhuyenMai">Mã Khuyến Mãi</td>
                                                    <td><select name="txtMaKhuyenMai">
                                                        <?php 
                                                        include("../config.php");
                                                        $sql = "SELECT * 
                                                                FROM khuyenmai 
                                                                ";
                                                        $san_pham = mysqli_query($ket_noi,$sql);
                                                        $i = 0;
                                                        while($row = mysqli_fetch_array($san_pham)){
                                                            $i++;

                                                            ;?>
                                                                <option value="<?php echo $row["makhuyenmai"];?>"><?php echo $row["makhuyenmai"];?></option>
                                                                <?php
                                                        }
                                                        //Đóng kết nối
                                                        mysqli_close($ket_noi);
                                                        ;?>
                                                    </select>
                                                    </td>
                                                </tr>
                                            <br>
                                            </div>
                                            <div class="mt-4 mb-0">
                                            <?php
           
                                                // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                                include("../config.php");
                                                // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                                                $ma_san_pham = $_GET["id"];
                                                $sql = "
                                                            SELECT *
                                                            FROM sanpham
                                                            WHERE masanpham = '".$ma_san_pham."'  ;
                                                ";

                                                // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                                                $san_pham= mysqli_query($ket_noi, $sql);

                                                    // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                                                    $row = mysqli_fetch_array($san_pham);
                                                ;?>
                                                <input type="hidden" name="txtID" value="<?php echo $row["masanpham"];?>">
                                                <input type="submit" name="btnSubmit" value="Cập nhật">
                                                <?php
                                                        
                                                        //Đóng kết nối
                                                        mysqli_close($ket_noi);
                                                        ;?>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Bản quyền &copy; Abc Company</div>
                            <div>
                                <a href="chinhsachbaomat.php">Chính sách bảo mật</a>
                                &middot;
                                <a href="chinhsachbaomat.php">Điều khoản và điều kiện</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

