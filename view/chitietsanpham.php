<link rel="stylesheet" href="view/css/css_iphone12_pro_max.css">
<section>
    <div class="breadcroumb">
        <div class="bao-breadcroumb">
            <a href="index.php" title="Go to Home page">
                <p>Trang chủ</p>
            </a>
        </div>
        <i class="fas fa-angle-right fa-xs"></i>
        <div class="bao-breadcroumb">
            <a href="index.php?act=sanpham">
                <p>Sản phẩm</p>
            </a>
        </div>
        <i class="fas fa-angle-right fa-xs"></i>
        <div class="bao-breadcroumb">
            <a href="index.php?act=chitietsanpham">
                <p>
                    <?php echo $name; ?>
                </p>
            </a>
        </div>
    </div>
    <div class="productnametop">
        <p>
            <?php echo $name ?>
        </p>
        <div class="danh-gia">
            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
            <i class="fas fa-star fa-xs" style="color: rgb(255, 217, 0);"></i>
            <span style="font-size: 12px;">10 đánh giá</span>
        </div>
    </div>
    <hr size="4px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
</section>
<section id="main">
    <div class="div_slide">
        <?php
        $ds_anh_sp = get_anh_san_pham_all($id);
        ?>
        <div class="img_product">
            <?php foreach ($ds_anh_sp as $anh_sp) {
                extract($anh_sp);
                $img = $img_path . $url_anh;
                ?>
                <div class="product_img_slide"><img class="card-img-top mb-5 mb-md-0" src="<?= $img; ?>" alt="..."
                        style="width:100%" /></div>
                <?php } ?>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <div class="img_row">
                <?php foreach ($ds_anh_sp as $anh_sp) {
                    extract($anh_sp);
                    $img = $img_path . $url_anh;
                    $i = 0;
                    ?>
                    <div class="img_column"><img class="img_down cursor" src="<?= $img; ?>" style="width:100%"
                            onclick="currentSlide(<?= $i ?>)" alt=""></div>
                    <?php $i++;
                } ?>
            </div>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("product_img_slide");
            var dots = document.getElementsByClassName("img_down");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
    <div class="produc_shop_right">
        <div class="price">
            <h2>
                <?php echo $price ?> ₫
            </h2>
            <p>Gía niêm yết: <span style="text-decoration:line-through ; color: gray;">35.990.000 ₫</span></p>
            <button type="button" onclick="alert('Liên hệ hotline để được tư vấn về chương trình trả góp!')">
                <a href="#">Trả góp 0%</a></button>
        </div>
        <div class="free_ship">
            <p>Miễn phí vận chuyển toàn quốc <i class="fas fa-shipping-fast fa-lm"></i></p>
        </div>
        <div class="khuyenmai">
            <div class="headkhuyenmai">
                <div class="texthead">
                    <p><i class="fas fa-gifts" fa-lm></i> Khuyến mãi:</p>
                </div>
            </div>
            <div class="mainkhuyenmai">
                <h4>Khuyến mãi hãng</h4>
                <li><a href="#">Giảm thêm 500.000đ khi mua kèm Apple Watch Series 6</a></li>
                <li><a href="#">[HOT] Thu cũ lên đời giá cao - Thủ tục nhanh - Trợ giá lên tới 500.000đ</a></li>
            </div>
        </div>
        <div class="btn_mua">
                <?php
                echo '
                            <form action="index.php?act=addgiohang" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <div class="input"><input type="submit" name="themgiohang" value="Thêm vào giỏ hàng"></div>
                            </form>';
                ?>
            <div class="btn_tragop">
                <button id="tragop0" type="button"
                    onclick="alert('Liên hệ hotline để được tư vấn về chương trình trả góp!')">Trả góp 0%
                    <span style="font-size: 13px;font-weight: 100;">
                        <p>(Xét duyệt qua điện thoại)</p>
                    </span>
                </button>
                <button id="tragopquathe" type="button"
                    onclick="alert('Liên hệ hotline để được tư vấn về chương trình trả góp!')">Trả góp qua thẻ
                    <span style="font-size: 13px;font-weight: 100;">
                        <p>(Visa, Master, JCB)</p>
                    </span>
                </button>
            </div>
            <div class="note_mua">
                <a href="#">Trả góp 0% với thẻ tín dụng tại cửa hàng - Xem chi tiết</a>
                <p>Liên hệ ngay: <span style="font-weight: 600;">0372082758</span> | <a href="#">Chat với tư vấn
                        viên</a></p>
            </div>
        </div>
    </div>
</section>
<section id="mota_product">
        <div class="write_product">
            <header>Mô tả sản phẩm</header>
            <br>
            <p>
                <?= $mota ?>
            </p>
            <br>
        </div>
        <script>
            $(document).ready(function () {
                $("#div1").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                });
            });
        </script>
        <div id="div1">

        </div>
    </div>

</section>
<section id="hang-hot">
    <div class="tieu-de">
        <p>TOP SẢN PHẨM YÊU THÍCH</p>
    </div>
    <hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">
    <div class="sp-hot">
        <?php
        foreach ($sp_cungloai as $sp) {
            extract($sp);
            $link = 'index.php?act=chitietsanpham&idsp=' . $id; ?>
            <div class="hot-brand">
                <div class="bao">
                    <?php echo '<a href="index.php?act=chitietsanpham&idsp=' . $id . '">'; ?>
                    <div class="box-name">
                        <?php echo $name; ?>
                    </div>
                    <div style="color: red; margin-top: 5px; margin-left: 5px; font-size: 17px;">
                        <span>
                            <?php echo $price; ?> đ
                        </span>
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
                    <a href="<?= $linksp ?>"><img class="card-img-top" src="<?=$img ?>" alt="..."
                            style="max-height: 400px;" /></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<hr size="5px" width="82%" color="coral" style="margin-bottom: 20px; margin-left: 9%;">