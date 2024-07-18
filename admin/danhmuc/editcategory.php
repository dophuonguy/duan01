<?php
     $hinhpath= $img_path_admin . $imgdm;
     if(is_file($hinhpath)){
         $hinh="<img src='".$hinhpath."' height='40'>";
     }else{
         $hinh="No photo";
     }
?>
<div class=" layout-specing row">
    <div class="row tm">
        <h1>CẬP NHẬT LOẠI SP</h1>
    </div>
    <div class="row tmcontent">
    <?php 
                extract($dmsp);
                echo '
                <form action="index.php?act=updatecategory" method="post" enctype="multipart/form-data">
                <h2>Sửa danh mục</h2>
                    <div>
                    <label for="">Mã loại</label>
                    <input type="text" name="IDDMSPUP" id="" value="'.$id.'"  readonly>
                    </div>
                    <div class="mt-3">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="TenDMSPUP" id="" value="'.$name.'">
                    </div>
                    <div class="mt-3">
                    <label for="">Ảnh: </label>
                    <input type="file" name="hinh" id="" value="'.$hinh.'">
                    </div>';
                    
                    echo'
                    <div class="mt-3">
                    <input type="submit" name="update" value="Lưu lại">
                    <a href="?act=category"><input type="button" value="Danh sách"></a>
                    </div>
                 </form>
                ';
            ?>
    </div>
</div>
</div>