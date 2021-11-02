
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng Ký Tài Khoản</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style = "background-color:#84b78c;">
    <?php
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("../config.php");
 
            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL      
            $ten_nguoi_dung= $_POST['txtTenNguoiDung'];
            $email_nguoi_dung= $_POST['txtEmail'];
            $password = $_POST['txtPassword'];
            $sql =  "INSERT INTO `nguoidung` (`manguoidung`, `tennguoidung`, `emailnguoidung`, `matkhau`) 
            VALUES (NULL, '".$ten_nguoi_dung."', '".$email_nguoi_dung."', '".$password."');";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $nguoi_dung= mysqli_query($ket_noi, $sql);
            //4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị sp
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã đăng ký thành công');
                    window.location.href='dangnhap.php';
                </script>
            ";
 
        ;?>
 
    </body>
</html>

