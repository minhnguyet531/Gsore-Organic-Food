<?php
          include("../config.php");
  
  
          $id_tin_tuc = $_GET["id"];
          
          $sql = "
                  DELETE FROM `tintuc` WHERE `tintuc`.`matintuc` = '".$id_tin_tuc."'
                 ";
  
          $tin_tuc = mysqli_query($ket_noi, $sql);
  
          echo "
                <script type='text/javascript'>
                  window.alert('Xóa bài viết thành công');
                  window.location.href='tintuc.php';
                </script>
               ";
;?>