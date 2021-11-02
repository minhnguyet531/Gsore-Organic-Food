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
          $ten_ncc = $_POST['txtTenncc'];
          $dia_chi = $_POST['txtDiachi'];
          $sdt = $_POST['txtSdt'];
          

          $sql = "
                  INSERT INTO `nhacungcap` (`manhacungcap`, `tennhacungcap`, `diachinhacungcap`, `sdtnhacungcap`) 
                  VALUES (NULL, '".$ten_ncc."', '".$dia_chi."', '".$sdt."');
                 ";
  
          $tin_tuc = mysqli_query($ket_noi, $sql);
  
          echo "
                <script type='text/javascript'>
                window.alert('Thêm mới nhà cung cấp thành công');
                window.location.href='nhacungcap.php';
                </script>
               ";
  
;?>