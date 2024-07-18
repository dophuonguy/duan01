<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="view/reponsive.css">
    <link rel="stylesheet" href="view/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="view/jquery-3.6.0.min.js"></script>
    <title>Trang chủ</title>
    <script src="./js/js_add_to_cart.js"></script>
    <script src="js/js_doi_mau.js"></script>
    <link rel="stylesheet" href="view/css/css_gio_hang.css">
    <link rel="stylesheet" href="view/css/css_thanhtoan.css">
    <link rel="stylesheet" href="view/css/css_iphone12_pro_max.css">
    <link href="view/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="view/css/mainstyle.css">
    <script src="view/js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header>
        <section>
            <div class="header">
                <div id="top1">
                    <a href="index.php"><img src="view/image/1x/logo_dai2.png" style="width: 90%; height: 250%;"></a>
                </div>
                <form action="index.php?act=sanpham" method="post" class="seachbox">
                    <input id="search-focus" name="kyw" type="search" class="form-control"
                        placeholder="Tìm Kiếm Sản Phẩm ">
                    <button type="submit" class="seach-btn" name="timkiem">
                        <i class="fa fa-search fa-2x" aria-hidden="true" style="color: white;"></i>
                    </button>
                </form>
                <div id="phone">
                    <img src="view/image/phone.svg" alt="">
                    <p>Gọi đặt hàng:</p>
                    <h2>0372082758</h2>
                </div>
                <div id="diachi">

                    <a href="https://goo.gl/maps/LK28Vc3hnCiNiG8Z8">
                        <img src="view/image/user.svg" alt="icon_map">
                        <p>Tìm cửa hàng</p>
                    </a>
                </div>
            </div>
        </section>
        <section id="menu">
            <ul>
                <li><a href="index.php"><b>Trang Chủ</b></a></li>
                <li><a href="?act=danhmucsp"><b>Danh mục</b></a>
                    <ul class="submenu">
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = 'index.php?act=sanpham&iddm=' . $id;
                            ?>
                            <li><a href="<?= $linkdm ?>"><b>
                                        <?= $name ?>
                                    </b></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="index.php?act=sanpham"><b>Sản Phẩm</b></a></li>
                <li><a href="index.php?act=suachua"><b>Sửa Chữa</b></a></li>
                <li><a href="?act=giohang"><b>Giỏ Hàng</b>
                        <?php
                        $count = count($_SESSION['mycart']);
                        echo $count;
                        ?>
                    </a></li>
                <li><a href=""><b></b></a>
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        ?>
                        <?php echo $user ?>
                        <ul class="submenu">
                            <li><a href="?act=edittaikhoan"><b>cập nhật tài khoản</b></a></li>
                            <li><a href="?act=mybill"><b>Đơn hàng của tôi</b></a></li>
                            <li><a href="?act=dangxuat"><b>Đăng xuất</b></a></li>

                        </ul>


                    </li>
                <?php } else { ?>
                    <a href="?act=dangnhap"><b>Đăng Nhập</b></a>
                <?php } ?>
            </ul>
        </section>
    </header>
    <!-- ========== End header ========== -->