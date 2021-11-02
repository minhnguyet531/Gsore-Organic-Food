<?php
    ob_start();
    session_start();
    include("config.php");
    if(isset($_POST["id"])){
        $id = $_POST["id"];
        $sql = "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai where `masanpham` = '".$id."'";
        $san_pham = mysqli_query($ket_noi,$sql);
        $row = mysqli_fetch_assoc($san_pham);

        
            
            if(!isset($_SESSION["wishlist"])){
                // lần đầu yêu thích
                $wishlist[$id] = array(
                    'masanpham' =>$row['masanpham'],
                    'tensanpham' =>$row['tensanpham'],
                    'anh' => $row['anh'],
                    'giamgia' =>$row['giamgia'],
                    'thoihan' => $row['thoihan'],
                    'soluong' => $row['soluong'],
                    // ktra xem đơn giá có giảm giá và trong thời hạn không nếu có gán đơn giá tương ứng
                    'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                );
            }
            else {
                $wishlist = $_SESSION["wishlist"];
                // kiểm tra id đã tồn tại trong cart chưa array_key_exists nếu không tồn tại thì thêm yêu thích
                if(!array_key_exists($id, $wishlist)){
                    // lần đầu yêu thích
                    $wishlist[$id] = array(
                        'masanpham' =>$row['masanpham'],
                        'tensanpham' =>$row['tensanpham'],
                        'anh' => $row['anh'],
                        'giamgia' =>$row['giamgia'],
                        'thoihan' => $row['thoihan'],
                        'soluong' => $row['soluong'],
                        // ktra xem đơn giá có giảm giá và trong thời hạn không nếu có gán đơn giá tương ứng
                        'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                    );
                }  
            }
       
        $_SESSION["wishlist"] = $wishlist;
        echo "<prE>";
        print_r($_SESSION["wishlist"]);
        
    }
?>