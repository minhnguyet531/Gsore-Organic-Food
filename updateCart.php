<?php
    ob_start();
    session_start();
    include("config.php");
    if(isset($_POST["id"]) && isset($_POST["soluongmua"])){
        $id= $_POST["id"];
        $sql = "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai where `masanpham` = '".$id."'";
        $san_pham = mysqli_query($ket_noi,$sql);
        $row = mysqli_fetch_assoc($san_pham);
        // kiểm tra xem giỏ hàng tồn tại 
        if(isset($_SESSION["cart"])){
            $cart = $_SESSION["cart"];
            // echo "<prE>";
            // print_r($cart);

            // kiểm tra id đã tồn tại trong cart chưa array_key_exists
            if(array_key_exists($id, $cart)){
                if($_POST["soluongmua"]>=1 && $_POST["soluongmua"] <= $row["soluong"]){
                    $cart[$id] = array(
                        'masanpham' =>$row['masanpham'],
                        'tensanpham' =>$row['tensanpham'],
                        'anh' => $row['anh'],
                        'giamgia' =>$row['giamgia'],
                        'soluong' => $row['soluong'],
                        // ktra xem đơn giá có giảm không nếu có gán đơn giá tương ứng
                        'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                        // tồn tại thì tăng số lượng lên 1
                        'soluongmua' => $_POST["soluongmua"],
                    );
                    // echo "<prE>";
                    // print_r($cart[$id]);

                }
                // nếu số lượng mua lớn hơn số lượng trong kho thì chỉ cho max số lượng mua bằng số lượng trong kho
                elseif($_POST["soluongmua"] >  $row["soluong"]){
                    $cart[$id] = array(
                        'masanpham' =>$row['masanpham'],
                        'tensanpham' =>$row['tensanpham'],
                        'anh' => $row['anh'],
                        'giamgia' =>$row['giamgia'],
                        'soluong' => $row['soluong'],
                        // ktra xem đơn giá có giảm không nếu có gán đơn giá tương ứng
                        'dongia' =>(($row['giamgia']!=0)&& (strtotime(date($row["thoihan"])) > strtotime(date("Y-m-d H:i:s")))) ? $row['dongia']*(100 - $row['giamgia'])/100 : $row['dongia'],
                        // tồn tại thì tăng số lượng lên 1
                        'soluongmua' => $row["soluong"],
                    );
                }
                else {
                    // xóa mặt hàng trong giỏ
                    unset($cart[$id]);
                }
            }
            $_SESSION["cart"] = $cart;
        }
        $number = $_POST["soluongmua"];
        echo $number;
    }
    else if(!isset($_POST["soluongmua"])&&!isset($_POST["id"])){
        unset($_SESSION["cart"]);
    }
    
?>