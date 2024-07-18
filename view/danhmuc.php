<?php
foreach ($dsdm as $dm) {
    extract($dm);
    $iddm =$id;
    $namedm = $name;

?>
<section id="hang-hot">
        <div class="tieu-de">
            <p><?=$name ?></p>           
        </div>
        <hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
        <div class="sp-hot">
            
                
                    <?php 
                        $dssp = load_sanpham_theo_danhmuc($iddm,"");
                        //var_dump($dssp);
                        foreach($dssp as $sp){
                        extract($sp);
                        $anh_sp = get_anh_san_pham_one($id);
                        $img =  $img_path .  $anh_sp['url_anh'];
                        $linksp = 'index.php?act=chitietsanpham&idsp=' . $id;
                        echo '<div class="hot-brand">
                        <div class="bao">
                        <a href="index.php?act=chitietsanpham&idsp=' . $id . '">
                        <div class="box-name">' . $name . '</div>
                        <div style="color: red; margin-top: 5px; margin-left: 5px; font-size: 17px;">
                            <span>' . $price . 'đ</span>
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
                        <a href="' . $linksp . '"><img class="card-img-top" src="'. $img . '" alt="..." style="max-height: 400px;"  /></a> 
                        </div>
                        </div>';
                    }?>                                                                                             
                                              
            
        </div>
    </section>
    <?php }?>
<hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
