<?php
  include("config.php");
  

  $email = $_POST["regEmail"];
  $mat_khau = $_POST["regMatkhau"];
  $ho_ten = $_POST["regHoten"];
  $dia_chi = $_POST["regDiachi"];
  $sdt = $_POST["regSdt"];
  
  $sql1 ="
          SELECT * FROM khachhang WHERE emailkhachhang = '".$email."'
         ";
  $sql2 ="
          INSERT INTO `khachhang` (`makhachhang`, `tenkhachhang`, `diachikhachhang`, `sodienthoaikhachhang`, `emailkhachhang`, `matkhaukhachhang`) 
          VALUES (NULL, '".$ho_ten."', '".$dia_chi."', '".$sdt."', '".$email."', '".$mat_khau."');
         ";
  

  $khach_hang = mysqli_query($ket_noi, $sql1);
 
  $so_luong_khach_hang = mysqli_num_rows($khach_hang);

  $row = mysqli_fetch_array($khach_hang);  
  
  if ($so_luong_khach_hang==1) {    
    echo "<script type='text/javascript'>
            window.alert('Tài khoản đã tồn tại');
            window.location.href='login.php';
        </script>";
  } else {
    echo "
        <script type='text/javascript'>
            window.alert('Đăng kí tài khoản thành công');
            window.location.href='login.php';
        </script>";
        $khach_hang_2 = mysqli_query($ket_noi, $sql2);
  }
;?>