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
    else{
        echo $_SESSION["tennguoidung"];
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
            <a class="navbar-brand ps-3" href="../index.php">Gsore Origanic Food</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                <?php
                 // 1. load file cấu hình csdl 
                 include("../config.php");
                //2. lấy ra dữ liệu tin tức mới nhất
                 $sql = "SELECT * FROM  nguoidung  ;
                 ";                
                //3. IN 
                $nguoi_dung = mysqli_query($ket_noi, $sql);  
                $row = mysqli_fetch_array($nguoi_dung)   
               
                ;?>    
                    <div  class="form-control" >  <?php echo $row["tennguoidung"];?>  </div>
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
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Chính sách bảo mật và Điều khoản</h1>
                        <ol class="breadcrumb mb-4">
                            <a href="index.php">Bảng điều khiển</a>
                        </ol>                       
                            <ol>
                            <li><h4> Mục đích và phạm vi quản trị</h4></li>
                                <p>Việc thu thập dữ liệu chủ yếu trên website bao gồm: họ tên, email, điện thoại, địa chỉ khách hàng trong mục liên hệ. Đây là các thông tin mà chúng tôi cần thành viên cung cấp bắt buộc khi gửi thông tin nhờ tư vấn hay muốn mua sản phẩm và để chúng tôi liên hệ xác nhận lại với khách hàng trên website nhằm đảm bảo quyền lợi cho cho người tiêu dùng.</p>
                                <p>Các thành viên sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới thông tin mà mình cung cấp và hộp thư điện tử của mình. Ngoài ra, thành viên có trách nhiệm thông báo kịp thời cho webiste chúng tôi về những hành vi sử dụng trái phép, lạm dụng, vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có biện pháp giải quyết phù hợp</p>
                            
                            <li><h4>Phạm vi sử dụng thông tin</h4>
                                <p>Chúng tôi sử dụng thông tin thành viên cung cấp để:</p>
                                <ol type = "a">
                                    <li>Liên hệ xác nhận đơn hàng và giao hàng cho thành viên khi nhận được yêu cầu từ thành viên;</li>
                                    <li>Cung cấp thông tin về sản phẩm đến khách hàng nếu có yêu cầu từ khách hàng;</li>
                                    <li> Gửi email tiếp thị, khuyến mại về hàng hóa do chúng tôi bán;</li>
                                    <li>Gửi các thông báo về các hoạt động trên website</li>
                                    <li>Không sử dụng thông tin cá nhân của người dùng ngoài mục đích xác nhận và liên hệ có liên quan đến giao dịch</li>
                                    <li> Khi có yêu cầu của cơ quan tư pháp bao gồm: Viện kiểm sát, tòa án, cơ quan công an điều tra liên quan đến hành vi vi phạm pháp luật nào đó của khách hàng.</li>                                    
                                </ol>
                            </li>
                            <li><h4>Thời gian lưu trữ thông tin</h4></li>
                            <p>Dữ liệu cá nhân của thành viên sẽ được lưu trữ cho đến khi có yêu cầu ban quản trị hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân thành viên sẽ được bảo mật trên máy chủ của chúng tôi</p>
                          
                            <li><h4>Những người hoặc tổ chức có thể được tiếp cận với thông tin đó</h4></li>
                            <p>Đối tượng được tiếp cận với thông tin cá nhân của khách hàng thuộc một trong những trường hợp sau:
                                – Nhân viên của công ty
                                – Các đối tác có ký hợp động thực hiện 1 phần dịch vụ của Công Ty. Các đối tác này sẽ nhận được những thông tin theo thỏa thuận hợp đồng (có thể 1 phần hoặc toàn bộ thông tin tuy theo điều khoản hợp đồng) để tiến hành hỗ trợ người dùng sử dụng dịch vụ do Công ty cung cấp.
                            </p>
                          
                            <li> <h4>Cơ chế tiếp nhận và giải quyết khiếu nại của người tiêu dùng liên quan đến việc thông tin cá nhân bị sử dụng sai mục đích hoặc phạm vi đã thông báo</h4></li>
                            <p>Mọi tranh chấp phát sinh giữa Công ty và Người dùng sẽ được giải quyết trên cơ sở thương lượng. Trường hợp không đạt được thỏa thuận như mong muốn, một trong hai bên có quyền đưa vụ việc ra Tòa án nhân dân có thẩm quyền để giải quyết.</p>
                            <p>Khi không giải quyết được qua thương lượng, hòa giải như trên, bên bị vi phạm tập hợp các chứng cứ như email, tin nhắn … và liên lạc với Công ty. Công ty sẽ liên lạc lại với người khiếu nại để giải quyết.</p>
                            <p>Thông tin cá nhân của thành viên được cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân. Việc thu thập và sử dụng thông tin của mỗi thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác</p>
                            <p>Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân thành viên, chúng tôi sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho thành viên được biết.</p>
                            <p>Ban quản lý yêu cầu các cá nhân khi đăng ký/mua hàng phải cung cấp đầy đủ thông tin cá nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, điện thoại,…., và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản lý không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của thành viên đó nếu xét thấy tất cả thông tin cá nhân của thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.</p>                          
                        </ol>
                        <p>Liên hệ qua email: <a href="mailto:maihuyen@gmail.com">maihuyen@gmail.com</a>.</p>                               
                    </div>
                </main>
                <footer  class="py-4 bg-light mt-auto"  > 
                    <div class="container-fluid px-4" >
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Bản Quyền &copy; Trang Web của bạn 2021</div>
                            <div>
                            <p><strong>Xin chân thành cảm ơn các bạn đã dành thời gian để đọc chính sách bảo mật và điều khoản của cửa hàng Gsore!</strong></p>                         
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
