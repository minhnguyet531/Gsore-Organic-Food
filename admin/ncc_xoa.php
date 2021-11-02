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
  
  
          $id_ncc = $_GET["id"];
          
          $sql = "
                  DELETE FROM `nhacungcap` WHERE `nhacungcap`.`manhacungcap` = '".$id_ncc."'
                 ";
  
          $ncc = mysqli_query($ket_noi, $sql);
  
          echo "
                <script type='text/javascript'>
                  window.alert('Xóa nhà cung cấp thành công');
                  window.location.href='nhacungcap.php';
                </script>
               ";
;?>