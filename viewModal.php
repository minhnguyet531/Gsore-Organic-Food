
<?php    
    include("config.php");
    session_start();
    if (isset($_POST['checking_viewbtn'])){
        $ma_san_pham = $_POST['masanpham'];
        // echo $return = $ma_san_pham;
        $sql= "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai where `masanpham` = '".$ma_san_pham."' ";
    
        $san_pham = mysqli_query($ket_noi,$sql);
    }
        $row=mysqli_fetch_assoc($san_pham);
    //    print_r($row);
;?>       
             
    <div class="container-fluid">
        <div class="row">
            <div class="col text-end">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                </button>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery-box m-b-60">
                        <div class="modal-product-image--large">
                            <img class="img-fluid" src="assets/img/product/size-normal/<?php echo $row['anh'];?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-details-box">
                        <h5 class="title title--normal m-b-20"><?php echo $row['tensanpham'];?></h5>
                        <div class="product__price">
                            <?php
                                if ($row["giamgia"]!=0){
                                    $gia_da_giam = $row["dongia"]*(100 - $row["giamgia"])/100;
                                    echo '<span class="product_price">'.$gia_da_giam.' đ'.' <del>'.$row["dongia"].' đ</del></span>';
                                }
                                else {
                                    echo '<span class="product_price">'.$row["dongia"].' đ</span>';
                                }
                            ;?>
                        </div>
                        <ul class="product__review m-t-15">
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--blank"><i class="icon-star"></i></li>
                        </ul>
                        <div class="product__desc m-t-25 m-b-30">
                            <p><?php echo $row['mota'];?></p>
                        </div>

                        <div class="product-var p-t-30">
                            <div class="product__stock m-b-20">
                                <?php 
                                    if ($row['soluong'] != 0) {
                                        echo '<span class="product__stock--in"><i class="fas fa-check-circle"></i>[Còn '.$row['soluong'].' sản phẩm]</span>';
                                    }
                                    else {
                                        echo '<span class="product__stock--in"><i class="fas fa-check-circle"></i>[Hết hàng]</span>';
                                    }
                                ;?>
                            </div>   
                        </div>

                        <div class="product-links">
                            <div class="product-social m-tb-30">
                                <span>CHIA SẺ SẢN PHẨM NÀY</span>
                                <ul class="product-social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            
        </div>
    </div>
                   