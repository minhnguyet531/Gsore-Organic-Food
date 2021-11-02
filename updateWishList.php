<?php
    ob_start();
    session_start();
    include("config.php");
    if(isset($_POST["id"])){
        $id= $_POST["id"];
        $sql = "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai where `masanpham` = '".$id."'";
        $san_pham = mysqli_query($ket_noi,$sql);
        $row = mysqli_fetch_assoc($san_pham);
        // kiểm tra xem giỏ hàng tồn tại 
        if(isset($_SESSION["wishlist"])){
            $wishlist = $_SESSION["wishlist"];
            // echo "<prE>";
            // print_r($wishlist);

            // kiểm tra id đã tồn tại trong wishlist chưa array_key_exists
            if(array_key_exists($id, $wishlist)){
                
                $wishlist[$id] = array(
                    'masanpham' =>$row['masanpham'],
                    'tensanpham' =>$row['tensanpham'],
                    'anh' => $row['anh'],
                    'giamgia' =>$row['giamgia'],
                    'thoihan' => $row['thoihan'],
                    // ktra xem đơn giá có giảm giá và trong thời hạn không nếu có gán đơn giá tương ứng
                    'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                );
                // echo "<prE>";
                // print_r($wishlist[$id]);

                // xóa mặt hàng yêu thích
                unset($wishlist[$id]);
            }
            $_SESSION["wishlist"] = $wishlist;
        }
        
    }
    else if(!isset($_POST["id"])){
        unset($_SESSION["wishlist"]);
    }
    
?>