<section id="san-pham-chinh">
        <div class="breadcroumb">
            <div class="bao-breadcroumb">
                <a href="index.php" title="Go to Home page"><p>Trang chủ</p></a>
            </div>
            <i class="fas fa-angle-right fa-xs"></i>
            <div class="bao-breadcroumb">
                <a href="index.php?act=sanpham"><p>Sản phẩm</p></a>
            </div>
        </div>
        <div class="tieu-de">
            <p> <?php echo $tendm ?></p>           
        </div>
        <hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
        <div class="row">
        <?php foreach($spdm as $sp):
            extract($sp);
            $anh_sp = get_anh_san_pham_one($id);
            $img =  $img_path .  $anh_sp['url_anh'];
            ?>
            <div class="col-3 col-s-6 box">
                <div class="contentsp">
                    <div class="bao-sp-chinh">
                        <?php echo '<a href="index.php?act=chitietsanpham&idsp=' . $id . '">'; ?>
                        <div class="box-name"><?php echo $name; ?></div>
                        <div style="color: red; margin-top: 5px; margin-left: 5px; font-size: 17px;">
                            <span><?php echo $price; ?> đ</span>
                            <span style="text-decoration:line-through ; color: gray; font-size: 12px;">25000000 đ</span>
                        </div></a>
                        <div class="danh-gia">
                            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
                            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
                            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
                            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
                            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
                            <span style="font-size: 12px;">5 đánh giá</span>
                        </div>  
                        <img class="card-img-top" src="<?=$img?>" alt="..." style="max-height: 300px;"  />       
                    </div>
                   
                </div>
            </div>
            <?php endforeach;  ?>
        </div>
    </section>