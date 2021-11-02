<?php
  include("config.php");
  

  $email = $_POST["Email"];
  $mat_khau = $_POST["Matkhau"];
  $sql = "
          SELECT * 
          from khachhang
          where emailkhachhang = '".$email."' and matkhaukhachhang = '".$mat_khau."'
          ";
  
 
  
  $khach_hang = mysqli_query($ket_noi, $sql);
 
  $so_luong_khach_hang = mysqli_num_rows($khach_hang);

  $row = mysqli_fetch_array($khach_hang);  

  if ($so_luong_khach_hang==1) {
    
    session_start();
    $_SESSION['login_success']=1;
    $_SESSION['id'] = $row["makhachhang"];
    
    echo "<script type='text/javascript'>
            window.alert('Đăng nhập thành công');
            window.location.href='my-account.php';
        </script>";
  } else {
    echo "
        <script type='text/javascript'>
            window.alert('Không thể đăng nhập');
            window.location.href='login.php';
        </script>";
  }
  
  ;?>