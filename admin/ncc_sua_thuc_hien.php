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
          $id = $_POST['txtID'];
          $ten_ncc = $_POST['txtTenncc'];
          $dia_chi = $_POST['txtDiachi'];
          $sdt = $_POST['txtSdt'];
          

          $sql = "
                  UPDATE `nhacungcap` 
                  SET `tennhacungcap` = '".$ten_ncc."', `diachinhacungcap` = '".$dia_chi."', `sdtnhacungcap` = '".$sdt."' 
                  WHERE `nhacungcap`.`manhacungcap` = '".$id."';
                 ";
  
          $ncc = mysqli_query($ket_noi, $sql);
  
          echo "
                <script type='text/javascript'>
                window.alert('Cập nhật nhà cung cấp thành công');
                window.location.href='nhacungcap.php';
                </script>
               ";
  
;?>$