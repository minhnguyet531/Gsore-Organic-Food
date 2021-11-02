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
        <title>Cập nhật sản phẩm</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("../config.php");
 
            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $ma_san_pham = $_POST['txtID'];
            $ten_san_pham= $_POST['txtTenSanPham'];
            $ma_loai_san_pham= $_POST['txtMaLoaiSanPham'];
            $so_luong = $_POST['txtSoLuong'];
            $don_gia = $_POST['txtDonGia'];
            $mo_ta = $_POST['txtMoTa'];    
            $ma_nha_cung_cap = $_POST['txtMaNhaCungCap'];
            $ma_khuyen_mai= $_POST['txtMaKhuyenMai']; 
                     
           
           // Lấy ra được thông tin & xử lý liên quan đến bức ẢNH MINH HỌA được SUBMIT từ form TIN TỨC THÊM MỚI
           $noi_se_luu_buc_anh_tren_website = "./images/img/".basename($_FILES["txtAnh"]["name"]);
           $luu_file_anh_tam = $_FILES["txtAnh"]["tmp_name"];

           // UPLOAD bức ảnh tạm này lên MÁY CHỦ WEB
           $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);

           // Ghi nhận thông tin bức ẢNH MINH HỌA được UPLOAD lên hệ thống hay chưa?
           if(!$ket_qua_up_anh) {
               $anh_minh_hoa = NULL;
           } else {
               $anh_minh_hoa = basename($_FILES["txtAnh"]["name"]);
           }

            if ($anh_minh_hoa==NULL) {
                $sql = " UPDATE `sanpham` SET `tensanpham` = '".$ten_san_pham."', `maloaisanpham` = '".$ma_loai_san_pham."', `soluong` = '".$so_luong."', 
                `dongia` = '".$don_gia."',
                `mota` = '".$mo_ta."', `manhacungcap` = '".$ma_nha_cung_cap."', `makhuyenmai` = '".$ma_khuyen_mai."'
                WHERE `sanpham`.`masanpham` = '".$ma_san_pham."';
                ";
            } else {
                $sql = " UPDATE `sanpham` SET `tensanpham` = '".$ten_san_pham."', `maloaisanpham` = '".$ma_loai_san_pham."', `soluong` = '".$so_luong."', 
                `dongia` = '".$don_gia."', anh = '".$anh_minh_hoa."',
                `mota` = '".$mo_ta."', `manhacungcap` = '".$ma_nha_cung_cap."', `makhuyenmai` = '".$ma_khuyen_mai."'
                WHERE `sanpham`.`masanpham` = '".$ma_san_pham."';
                ";
            }

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $san_pham= mysqli_query($ket_noi, $sql);
 
            // 4. Thông báo cập nhật dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã cập nhật sản phẩm thành công');
                    window.location.href='sanpham.php';
                </script>
            ";
 
        ;?>
 
    </body>
</html>

