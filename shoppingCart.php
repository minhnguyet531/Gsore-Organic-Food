<?php
    ob_start();
    session_start();
    include("config.php");
    if(isset($_POST["id"])){
        $id = $_POST["id"];
        $num = $_POST["soluongmua"];
        $sql = "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai where `masanpham` = '".$id."'";
        $san_pham = mysqli_query($ket_noi,$sql);
        $row = mysqli_fetch_assoc($san_pham);

        if(!isset($_SESSION["cart"])){
            // lần đầu mua hàng
            $cart[$id] = array(
                'masanpham' =>$row['masanpham'],
                'tensanpham' =>$row['tensanpham'],
                'anh' => $row['anh'],
                'giamgia' =>$row['giamgia'],
                'thoihan' => $row['thoihan'],
                'soluong' => $row['soluong'],
                // ktra xem đơn giá có giảm giá và trong thời hạn không nếu có gán đơn giá tương ứng
                'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                'soluongmua' => $num
            );
        }
        else {
            $cart = $_SESSION["cart"];
            // kiểm tra id đã tồn tại trong cart chưa array_key_exists nếu tồn tại thì cộng tăng số lượng
            if(array_key_exists($id, $cart)){
                $cart[$id] = array(
                    'masanpham' =>$row['masanpham'],
                    'tensanpham' =>$row['tensanpham'],
                    'anh' => $row['anh'],
                    'giamgia' =>$row['giamgia'],
                    'soluong' => $row['soluong'],
                    // ktra xem đơn giá có giảm không nếu có gán đơn giá tương ứng
                    'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                    // tồn tại thì tăng số lượng lên 1
                    'soluongmua' => (int)$cart[$id]["soluongmua"] + $num,
                );
            }
            else {
                // chưa tồn tại
                $cart[$id] = array(
                    'masanpham' =>$row['masanpham'],
                    'tensanpham' =>$row['tensanpham'],
                    'anh' => $row['anh'],
                    'giamgia' =>$row['giamgia'],
                    'soluong' => $row['soluong'],
                    // ktra xem đơn giá có giảm không nếu có gán đơn giá tương ứng
                    'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                    'soluongmua' => $num
                );
            }

        }

       
        $_SESSION["cart"] = $cart;
        echo "<prE>";
        print_r($_SESSION["cart"]);
        
        // // tổng số lượng sản phẩm trong giỏ và tổng tiền
        // $number = 0;
        // $total = 0;
        // foreach($cart as $value){
        //     $number +=(int)$value["soluongmua"];
        //     $total +=(int)$value["soluongmua"]*(int)$value["dongia"];
        // }
        // echo $number."-".number_format($total,0,",",".");

    }
?>