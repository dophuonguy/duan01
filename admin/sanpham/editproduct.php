<?php extract($ctsp) ;
$id_sp = $id;
?>
<div class="layout-specing row">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    <h2 style="text-align:center">Sửa sản phẩm</h2>
        <form action="index.php?act=updateproduct" method="post" enctype="multipart/form-data">
            <div>
                <label for="">IDSP</label>
                <input type="text" readonly name="idSP" id="" value="<?=$id ?>">
            </div>
            <br>
            <div>
                <label for="">Tên sản phẩm</label>
                <input type="text" name="upTenSP" id="" value="<?php echo $name ?>">
            </div>
            <br>
            <div>
                <label for="">Giá</label>
                <input type="text" name="upGia" id="" value="<?php echo $price ?>">
            </div>
            <br>
            <div>
                <label for="">loại sản phẩm</label>
                <select name="upTenLoaiSP" id="">
                    <option value="<?php echo $iddm ?>"><?php echo $namedm ?></option>
                    <?php
                    foreach ($dmsp as $dm) {
                        extract($dm);
                        if ($id == $iddm) {
                            continue;
                        }
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <br>
            <div class="">
                
                danh sách ảnh sản phẩm
                <div style=" display: flex; justify-content: center;">
                   
                    <?php
                    
                      $ds_anh_sp = get_anh_san_pham_all($id_sp);
                      //var_dump($ds_anh_sp);
                        foreach ( $ds_anh_sp as  $san_pham) {
                          extract($san_pham);
                          echo '<div style="display: flex; flex-direction: column;">';
                          echo '<img src="'.$img_path_admin.$url_anh.'" width="80" alt="">';
                          echo '<a href="index.php?act=editproduct&edit='.$id_sp.'&id_anh='.$id_anh.'"><button type="button" >xóa</button></a>';
                          echo '</div>';
                        }
                    ?>
                </div>
                <label for="">tải lên ảnh sản phẩm: </label><br>
                <input type="file" name="images[]" id="" multiple>
            </div>
            <br>
            <div class="">
                <label for="">Mô tả sản phẩm</label><br>
                <textarea name="MoTaSP" id="" cols="30" rows="6"><?php echo $mota ?></textarea>
            </div>
            <br>
            <div>
                <input type="submit" name="update" value="lưu">
                <a href="?act=product"><input type="button" value="Danh sách"></a>
            </div>
        </form>
</div>