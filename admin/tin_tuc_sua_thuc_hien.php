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
          $id_tin_tuc = $_POST['txtID'];
  
          $noi_luu_anh = "../assets/img/blog/feed/".basename($_FILES['txtAnhMinhHoa']['name']);
          $luu_file_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];

          $up_anh = move_uploaded_file($luu_file_anh, $noi_luu_anh);

          if (!$up_anh) {
            $anh_minh_hoa = NULL;
          } else {
            $anh_minh_hoa = basename($_FILES['txtAnhMinhHoa']['name']);
          }

          if ($anh_minh_hoa==NULL) {
            $sql = "
                  UPDATE `tintuc` 
                  SET `tieude` = '".$tieu_de."', `mota` = '".$mo_ta."', `noidungtintuc` = '".$noi_dung."' 
                  WHERE `tintuc`.`matintuc` = '".$id_tin_tuc."'
                   ";
          } else {

            $sql = "
                  UPDATE `tintuc` 
                  SET `tieude` = '".$tieu_de."', `mota` = '".$mo_ta."', `noidungtintuc` = '".$noi_dung."', `anhminhhoa` = '".$anh_minh_hoa."'
                  WHERE `tintuc`.`matintuc` = '".$id_tin_tuc."'
                   ";
          }
          
          $tin_tuc = mysqli_query($ket_noi, $sql);
          
          echo "
                <script type='text/javascript'>
                  window.alert('Sửa bài viết thành công');
                  window.location.href='tintuc.php';
                </script>
               ";
    ;?>