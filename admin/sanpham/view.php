<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
    color: aqua;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<?php

extract($ctsp);
?>
<div class="layout-specing">
    <!-- Start Content -->
    <div class="md:flex justify-between items-center">
        <h5 class="text-lg font-semibold">#<?php echo $id; ?></h5>

        <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
            <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="index.php">Techwind</a></li>
    </div>

    <div class="p-6 rounded-md mt-6 shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-6 items-center">
            <div class="xl:col-span-4 lg:col-span-5 md:col-span-6">
                <div class="tiny-single-item">

                    <div class="tiny-slide" style="width: 350px;" style="width: 300px;">
                        <div class="slideshow-container">
                            <?php
                                foreach ($ds_anh_sp as  $anh_sp) {
                                    extract($anh_sp);
                                    $hinh = $img_path_admin.$url_anh;
                                    $i =0;
                            ?>
                            <div class="mySlides fade">
                                <div class="numbertext"> <?=$i ?>/ <?=count($ds_anh_sp)?></div>
                                <img src="<?=$hinh?>" alt="..." style="width:100%">
                            </div>
                            <?php 
                                $i++;}
                            ?>
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                        </div>
                        <br>

                        <div style="text-align:center">
                        <?php
                                foreach ($ds_anh_sp as  $anh_sp) {
                                    $i =1;
                            ?>
                            <span class="dot active" onclick="currentSlide(<?=$i ?>)"></span>
                            <?php 
                                $i++;}
                            ?>
                        </div>

                    </div><!--end content-->


                </div><!--end tiny slider-->
            </div><!--end col-->

            <div class="xl:col-span-8 lg:col-span-7 md:col-span-6">
                <div class="lg:ms-6">
                    <h5 class="text-2xl font-semibold"></h5>
                    <div class="mt-2">
                        <span style="color:tomato;">
                            <h1><?php echo $name ?></h1>
                        </span>
                        <span style="color:tomato;">-------------------------------------</span>
                        <span style="color:tomato;">
                            <h1>Giá: <?php echo $price ?>đ </h1>
                        </span>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-lg font-semibold">Mô tả</h5>
                        <p class="text-slate-400 mt-2"><?php echo $mota ?></p>

                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> hài lòng</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Rất hài lòng</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Không hài lòng</li>
                        </ul>
                    </div>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-4">
                        <div class="flex items-center">
                            <h5 class="text-lg font-semibold me-2">Chức năng:</h5>
                            <div class="">
                                <?php echo '<a href="?act=editproduct&edit=' . $id . '" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"">Sửa</a>'; ?>
                            </div>
                        </div><!--end content-->

                        <div class="flex items-center">
                            <h5 class="text-lg font-semibold me-2">lượt xem: </h5>
                            <div class="qty-icons ms-3">
                                <?php echo $luotxem ?>
                                <!-- <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 border hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                                                    <input min="0" name="quantity" value="0" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button> -->
                            </div>
                        </div><!--end content-->
                    </div><!--end grid-->

                    <div class="mt-4">
                        <!-- <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Shop Now</a>
                                            <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white mt-2">Add to Cart</a> -->
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div>
    <div class="p-6 rounded-md mt-6 shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
        <form action="index.php?act=dsbinhluan&idsp=<?php echo $idsp ?>" method="post">
            <div class="mt-3">
                <table class="table">
                    <h2 style='text-align: center;'>Danh sách bình luận </h2>
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Mã tài khoản</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Ngày bình luận</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dsbl as $bl) {
                            extract($bl);
                            echo '
                                                                <tr>
                                                                <td><input type="checkbox" name="myCheck[]" value="' . $id . '"></td>
                                                                <td>' . $id . '</td>
                                                                <td>' . $user . '</td>
                                                                <td>' . $noidung . '</td>
                                                                <td>' . $ngaybinhluan . '</td>
                                                                </tr>
                                                        ';
                        }

                        ?>

                    </tbody>


                </table>
            </div>
            <div class="">
                <input type="button" onclick="check();" value="Chọn tất cả">
                <input type="button" onclick="uncheck();" value="Bỏ chọn tất cả">
                <input type="submit" name="delete" value="Xóa mục đã chọn">
            </div>
        </form>
    </div>
    <!--end grid-->
    <!-- End Content -->
</div>
<?php  ?>


<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>