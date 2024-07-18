<section>
            <div class="via">
                <div class="mySlides">
                <img src="view/image/banner-iphone-12-mini-1200-140.gif" style="width:100%">
                </div>
                
                <div class="mySlides">
                <img src="view/image/Bannerxiaomi.png" style="width:100%">
                </div>
                
                <div class="mySlides">
                <img src="view/image/donghothongminh.gif" style="width:100%">
                </div>
            </div>
            <script src="js/jsslide_via.js"></script>
        </section>
    <section id="hang-hot">
        <div class="tieu-de">
            <p>TOP SẢN PHẨM BÁN CHẠY</p>           
        </div>
        <hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
        <div class="sp-hot">
            <?php foreach($spnew as $sp):
            extract($sp);
            $linksp = 'index.php?act=chitietsanpham&idsp=' . $id;
             ?>
            <div class="hot-brand">
                <div class="bao">
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
                    <?php
                    $anh_sp = get_anh_san_pham_one($id);
                    $img =  $img_path .  $anh_sp['url_anh'];
                    ?>
                    <a href="<?=$linksp ?>"><img class="card-img-top" src="<?=$img?>" alt="..." style="max-height: 400px;"  /></a>                                                                                              
                </div>                              
            </div>
            <?php endforeach;  ?>
        </div>
    </section>
    <section id="san-pham-chinh">
        <div class="tieu-de">
            <p>SẢN PHẨM NỔI BẬT</p>           
        </div>
        <hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
        <div class="row">
            <?php foreach($spnew as $sp):
                extract($sp);
                $linksp = 'index.php?act=chitietsanpham&idsp=' . $id;
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
                        <?php
                        $anh_sp = get_anh_san_pham_one($id);
                        $img =  $img_path .  $anh_sp['url_anh'];
                        ?>
                        <a href="<?=$linksp ?>"><img class="card-img-top" src="<?=$img;?>" alt="..." style="max-height: 400px;"  /></a>                                                                                              
                    </div>
                   
                </div>
            </div>
            <?php endforeach;  ?>
        </div>
    </section>
    
<section id="hang-hot">
        <div class="tieu-de">
            <p>TOP SẢN PHẨM YÊU THÍCH</p>           
        </div>
        <hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
        <div class="sp-hot">
            <?php  
                foreach ($dstop10 as $sp) :
                extract($sp);
                $linksp = 'index.php?act=chitietsanpham&idsp=' . $id;?>
            <div class="hot-brand">
                <div class="bao">
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
                    <?php
                    $anh_sp = get_anh_san_pham_one($id);
                    $img =  $img_path .  $anh_sp['url_anh'];
                    ?>
                    <a href="<?=$linksp ?>"><img class="card-img-top" src="<?=$img;?>" alt="..." style="max-height: 350px;"  /></a>                                               
                </div>                              
            </div>
            <?php endforeach;  ?>
        </div>
    </section>
    <hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
<!-- ========== End main ========== -->
<!-- <a class="btn btn-outline-dark mt-auto" href="#">Thêm vào giỏ hàng</a> -->
<!-- <input type="hidden" name="" value=""> -->