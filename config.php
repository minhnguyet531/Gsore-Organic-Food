<?php
    // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
    $ket_noi = mysqli_connect("localhost", "root", "", "data_web03") or die("Lỗi kết nối database");
    mysqli_set_charset($ket_noi,"utf8");
;?>