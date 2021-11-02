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

    <?php
          include("../config.php");
          $tieu_de = $_POST['txtTieuDe'];
          $mo_ta = $_POST['txtMoTa'];
          $noi_dung = $_POST['txtNoiDung'];
          $nguoi_dang = $_SESSION['ten_nguoi_dung'];

          $noi_luu_anh = "../assets/img/blog/feed/".basename($_FILES["txtAnhMinhHoa"]['name']);
          $luu_file_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];

          $up_anh = move_uploaded_file($luu_file_anh, $noi_luu_anh);

          if (!$up_anh) {
                    $anh_minh_hoa = NULL;
          } else {
                    $anh_minh_hoa = basename($_FILES['txtAnhMinhHoa']['name']);
          }


          $sql = "
                  INSERT INTO `tintuc` (`matintuc`, `tieude`, `mota`, `noidungtintuc`, `ngaydang`, `nguoidang`, `anhminhhoa`) 
                  VALUES (NULL, '".$tieu_de."', '".$mo_ta."', '".$noi_dung."', current_timestamp(), '".$nguoi_dang."', '".$anh_minh_hoa."');
                 ";
  
          $tin_tuc = mysqli_query($ket_noi, $sql);
  
          echo "
                <script type='text/javascript'>
                window.alert('Cập nhật bài viết thành công');
                window.location.href='tintuc.php';
                </script>
               ";
  
      ;?>
    
