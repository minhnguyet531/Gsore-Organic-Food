
<?php
                session_start();
                 // 1. load file cấu hình csdl 
                 include("../config.php");
                //2. lấy ra dữ liệu tin tức mới nhất
                $email = $_POST["txtEmail"];
                $mat_khau = $_POST["txtMatkhau"];
                $sql = "SELECT * FROM  nguoidung 
                WHERE emailnguoidung = '".$email."' AND matkhau = '".$mat_khau."'
                ";                
                //3. IN 
                $nguoi_dung = mysqli_query($ket_noi, $sql);                                    
                //4. Hien thi
                $so_luong_nguoi_dung = mysqli_num_rows($nguoi_dung); 
                $row = mysqli_fetch_array($nguoi_dung);                              
                //5. khẳng định ng dùng có quyền truy cập hay k?
                 if ($so_luong_nguoi_dung == 1){                    
                      $_SESSION['da_dang_nhap']=1;
                      $_SESSION['ma_nguoi_dung'] = $row["manguoidung"];
                      $_SESSION['ten_nguoi_dung'] = $row["tennguoidung"];
                      $_SESSION['email_nguoi_dung'] = $row["emailnguoidung"];
                      $_SESSION['mat_khau'] = $row["matkhau"];
                                   
                    echo " 
                    <script type = 'text/javascript'>
                      window.alert(' Chào mừng ".$_SESSION['ten_nguoi_dung']." đến với trang quản trị!');
                      window.location.href='index.php';
                    </script>
                    ";
                 }
                 else {
                    echo " 
                    <script type = 'text/javascript'>
                      window.alert(' Bạn không được phép đăng nhập!');
                      window.location.href='dangnhap.php';
                    </script>
                    ";
                 }
          ;?> 
