<?php
  include("config.php");
  

  $old_pass = $_POST["Matkhaucu"];
  $new_pass = $_POST["Matkhaumoi"];
  $new_pass_cf = $_POST["Matkhaumoixacnhan"];
  $id = $_POST["Makhachhang"];
  
  $sql1 = "
          SELECT * FROM khachhang WHERE makhachhang = '".$id."';         
          ";
  
  $sql2 = "
          UPDATE `khachhang` SET `matkhaukhachhang` = '".$new_pass."' WHERE `khachhang`.`makhachhang` = '".$id."';
          ";
  
  $khach_hang = mysqli_query($ket_noi, $sql1);

  $row = mysqli_fetch_array($khach_hang);  

  if ($old_pass!=$row["matkhaukhachhang"]) {
      echo "
            <script type='text/javascript'>
                window.alert('Bạn nhập sai mật khẩu');
                window.location.href='my-account.php';
            </script>
           ";
  } else {
      if ($new_pass_cf==$new_pass) {
        echo "
              <script type='text/javascript'>
                  window.alert('Thay đổi mật khẩu thành công');
                  window.location.href='my-account.php';
              </script>
             ";
        $khach_hang_2 = mysqli_query($ket_noi, $sql2);
      } else {
        echo "
              <script type='text/javascript'>
                  window.alert('Mật khẩu mới không khớp');
                  window.location.href='my-account.php';
              </script>
             ";
      }
  }
  
;?>