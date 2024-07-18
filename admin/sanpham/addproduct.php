<div class="layout-specing row">
    <form action="index.php?act=addproduct" method='post' enctype="multipart/form-data">
        <h2 style='text-align: center;'>Sản Phẩm</h2>
        <div class="row">
            <div class="col">
                <div class="mt-1">
                    <label for="">ID sản phẩm</label><br>
                    <input type="text" placeholder="auto number" name="IDSP" id="" disabled>
                </div>
                <div class="mt-1">
                    <label for="">Tên sản phẩm</label><br>
                    <input type="text" name="TenSP" id="">
                </div>
                <div class="mt-1">
                    <label for="">Giá</label><br>
                    <input type="number" name="Gia" id="">
                </div>
                <div class="mt-1">
                    <label for="">Ảnh</label><br>
                    <input type="file" name="images[]" id="" multiple>
                </div>

            </div>
            <div class="col">
                <div class="mt-1">
                    <label for="">Loại sản phẩm</label><br>
                    <select name="IDDMSP" id="">
                    <option value=""></option>
                        <?php 
                            foreach ($dmsp as $dm) {
                                extract($dm);
                                echo'<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                        
                    </select>
                </div>
                <div class="mt-1">
                    <label for="">Mô tả sản phẩm</label><br>
                    <textarea name="MoTaSP" id="" cols="30" rows="6"></textarea>
                </div>

            </div>
        </div>
        <br>
            <?php if (isset($thongbao) && $thongbao != ""){
                echo $thongbao;
            } ?>
        <br>
        <div class='mt-3'>
            <input type="submit" name="themmoi" value="Thêm mới">
            <input type="reset" value="Nhập lại">
            <a href="?act=product"><input type="button" value="Danh sách"></a>
        </div>
    </form>
</div>