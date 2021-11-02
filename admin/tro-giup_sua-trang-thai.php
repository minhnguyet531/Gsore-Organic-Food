<?php
    #Kiểm tra quyền truy nhập | check SESSTION
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cập nhật trạng thái xử lý trợ giúp </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
        //1.Tạo kết nối với máy chủ DL
        include("../config.php");

        $id_trogiup = $_GET['id'];
        $trangthai = $_GET['status'];

        // 2.Câu lệnh truy vấn
        $sql = "UPDATE `trogiup`
                SET `trangthai` = '".$trangthai ."'
                WHERE `trogiup`.`matrogiup` = '" .$id_trogiup ."';
                ";
                
        $result = mysqli_query($ket_noi, $sql);

        #Thông báo đã chèn DL thành công, điều hướng về trang Quản trị tin tức
        echo "
            <script type = 'text/javascript'>
                window.alert('Đã cập nhật trạng thái xử lý trợ giúp thành công');
                window.location.href = 'tro-giup.php';
            </script>
        ";
    ?>
</body>

</html>