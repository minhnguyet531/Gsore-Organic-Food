<?php    
    include("config.php");
    session_start();
    $wishlist = (isset($_SESSION['wishlist']))? $_SESSION['wishlist'] : [];

    
    if (isset($_POST['checking_addwishlistbtn'])){
        $ma_san_pham = $_POST['id'];
        // echo $return = $ma_san_pham;
        $sql= "select * from sanpham left join khuyenmai on sanpham.makhuyenmai = khuyenmai.makhuyenmai where `masanpham` = '".$ma_san_pham."' ";
    
        $san_pham = mysqli_query($ket_noi,$sql);
    }
        $row=mysqli_fetch_assoc($san_pham);
       
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
        <div class="col-md-4">
            <div class="modal__product-img">
                <img class="img-fluid" src="assets/img/product/size-normal/<?php echo $row['anh'];?>" alt="">
            </div>
        </div>
        <div class="col-md-8">
            <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Thêm vào danh sách thành công!</div>
            <div class="modal__product-wishlist-buttons m-tb-15">
                <a href="wishlist.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">Xem danh sách yêu thích</a>
                <a href="view-cart.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">Xem giỏ hàng</a>
            </div>
        </div>
    </div>
</div>