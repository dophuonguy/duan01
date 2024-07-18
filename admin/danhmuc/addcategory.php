<div class="layout-specing row">
    <div class="container mt-3">
        <div class="">
            <form action="index.php?act=addcategory" method='post' enctype="multipart/form-data">
                <h2>Thêm mới danh mục</h2>
                <div>
                    <label for="">Mã loại</label>
                    <input type="text" name="IDDMSP" id="" placeholder="auto number" disabled>
                </div>
                <div class='mt-3'>
                    <label for="">Tên danh mục</label>
                    <input type="text" name="TenDMSP" id="" required>
                </div>
                <div>
                    <label for="">Ảnh</label>
                    <input type="file" name="hinh" id="" required>
                </div>
                <div>
                    <?php 
                        if (isset($thongbao) && $thongbao  != "") {
                            echo $thongbao ;
                        }
                    ?>
                </div>
                <div class='mt-3'>
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset"  value="Nhập lại">
                    <a href="?act=category"><input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
    </div>
</div>
