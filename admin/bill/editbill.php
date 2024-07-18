<div class="layout-specing row">
    <div class="row tmcontent">
    <?php 
                //var_dump($bill);
                extract($bill);
                echo '
                <form action="index.php?act=updatebill" method="post">
                <h2>Sửa danh mục</h2>
                    <div>
                    <label for="">Mã đơn hàng</label>
                    <input type="text" name="id" id="" value="'.$bill['id'].'"  readonly>
                    </div>
                    <div class="mt-3">
                    <label for="">Tình trạng đơn hàng: </label>
                    <select name="ttdh" value="'.$bill['bill_status'].'">
                        <option value="0">'.$tt = "đơn hàng mới".'</option>
                        <option value="1">'.$tt = "đang xử lý".'</option>
                        <option value="2">'.$tt = "đang giao hàng".'</option>
                        <option value="3">'.$tt = "Hoàn tất".'</option>
                    </select>
                    <section>
                    </section>
                    </div>';
                    
                    echo'
                    <div class="mt-3">
                    <input type="submit" name="update" value="Lưu lại">
                    <a href="?act=listbill"><input type="button" value="Danh sách"></a>
                    </div>
                 </form>
                ';
            ?>
    </div>
</div>
</div>