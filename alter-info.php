<?php
  include("config.php");
  

  $email = $_POST["Email"];
  $ho_ten = $_POST["Hoten"];
  $dia_chi = $_POST["Diachi"];
  $sdt = $_POST["Sdt"];
  $id = $_POST["Makhachhang"];
  
  $sql1 ="
          SELECT * FROM khachhang WHERE emailkhachhang = '".$email."'
         ";

  $sql2 = "
          UPDATE `khachhang` 
          SET `tenkhachhang` = '".$ho_ten."', `diachikhachhang` = '".$dia_chi."', `sdtkhachhang` = '".$sdt."', `emailkhachhang` = '".$email."'
          WHERE `khachhang`.`makhachhang` = '".$id."';         
          ";

  $khach_hang = mysqli_query($ket_noi, $sql1);
 
  $so_luong_khach_hang = mysqli_num_rows($khach_hang);

  $row = mysqli_fetch_array($khach_hang);  
  
  if ($so_luong_khach_hang==1) {    
    echo "<script type='text/javascript'>
            window.alert('Email đã tồn tại');
            window.location.href='my-account.php';
        </script>";
  } else {
    echo "
        <script type='text/javascript'>
            window.alert('Thay đổi thông tin thành công');
            window.location.href='my-account.php';
        </script>";
        $khach_hang_2 = mysqli_query($ket_noi, $sql2);
  }
  
;?>
