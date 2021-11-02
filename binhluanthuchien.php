
<?php
        session_start();
        // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
        include("config.php");
        $ma_san_pham = $_GET['id'];
        // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
        $ten_khach_hang = $_POST['txtTenKhachHang'];
        $email = $_POST['txtEmail'];
        $noi_dung = $_POST['txtNoiDung'];
        
        if(!$ket_noi){
            die("kết nối thất bại:" .mysqli_connect_error());
        }
    // lấy ra thông tin khách đã dặt hàng
    $sql = "SELECT*FROM  khachdathang 
    WHERE tenkhachdathang = '".$ten_khach_hang."' AND  emailkhachdathang= '".$email."' 
    ORDER BY tenkhachdathang DESC LIMIT 1;
    ";                
    //3. IN 
    $khach_dat_hang = mysqli_query($ket_noi, $sql);                                    
    //4. Hien thi
    $so_luong_khach_dat_hang = mysqli_num_rows($khach_dat_hang); 
    $row = mysqli_fetch_array($khach_dat_hang);                              
    //5. lấy ra mã kh đúng với thông tin khách đã nhập
        if ($so_luong_khach_dat_hang == 1){
        $_SESSION['ma_khach_dat_hang'] = $row["makhachdathang"];
    // thêm bl của khách đã đặt hàng
        $sql2 = "INSERT INTO `binhluan` (`makhachdathang`, `masanpham`, `noidungbinhluan`, `thoigianbinhluan`) 
        VALUES ('".$_SESSION['ma_khach_dat_hang']."', '".$ma_san_pham."', '".$noi_dung."', 'date(Y-m-d H:i:s)');
        ";
        // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
        $noi_dung_binh_luan = mysqli_query($ket_noi,$sql2);
        echo "
        <script type='text/javascript'>
            window.alert('Bạn đã gửi bình luận thành công');
            window.location.href='shop.php';
        </script>";
        } else{
        echo "
        <script type='text/javascript'>
            window.alert('Bạn không thể bình luận, do chưa mua hàng');
            window.location.href='shop.php';
        </script>";
        }
    
    ;?>