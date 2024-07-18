<?php

include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/binhluan.php';
include 'model/taikhoan.php';
include 'model/giohang.php';
include 'global.php';
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

session_start();
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
?>

<?php  ?>

<?php include 'view/header.php' ?>

<?php

if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        case 'chitietsanpham':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $idsp = $_GET['idsp'];
                $sp = load_chitiet_sanpham($idsp);
                extract($sp);
                $sp_cungloai = loadsp_cungloai($idsp, $iddm);
                include 'view/chitietsanpham.php';
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm  = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $spdm = load_sanpham_theo_danhmuc($iddm, $kyw);
            $tendm = load_ten_dm($iddm);
            include 'view/sanpham.php';
            break;
        case 'danhmucsp':
            
            include 'view/danhmuc.php';
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                
                dangky_taikhoan($_POST['user'], $_POST['pass'], $_POST['email']);
                $thongbao   = 'đăng kí thành công';
            }
            include 'view/login/dangky.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $thongbao = 'đăng nhập  thành công';
                    //header('Loacation: index.php');
                } else {
                    $thongbao = 'thông tin sai';
                }
            }
            include 'view/login/dangnhap.php';
            break;
        case 'edittaikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] =  checkuser($user, $pass);
                $load = true;
            }

            include 'view/login/edittaikhoan.php';
            break;
        case 'dangxuat':
            dangxuat();
            if (isset($_SESSION['user'])) {
                echo '<script> location.replace("index.php"); </script>';
            }
            break;
        case 'quenmatkhau':
            if (isset($_POST['guimail'])) {
                $thongbao = guiMail($_POST['email']);
            }
            include 'view/login/quenmatkhau.php';
            break;

        case 'addgiohang':
            if (isset($_POST['themgiohang']) && ($_POST['themgiohang'])) {
                $id = $_POST['id'];
                $ktra= array_search($id, array_column($_SESSION['mycart'],0));
                if($ktra !== false){
                    $_SESSION['mycart'][$ktra][4]+=1;
                }else{
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $ttien = $soluong * $price;
                    $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                }
            }
            echo '<script> location.replace("index.php?act=giohang"); </script>';
            //include 'view/giohang.php';
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart'];
                //unset($_SESSION['mycart'][$idcart]);
                array_splice($_SESSION['mycart'], $idcart, 1);
                //array_slice($_SESSION['mycart'],$idcart,1);

            } else {
                $_SESSION['mycart'] = [];
            }
            // array_splice($_SESSION['mycart'],$idcart,1);
            // var_dump($_SESSION['mycart']); 
            echo '<script> location.replace("index.php?act=giohang"); </script>';
            break;
        case 'giohang':
            include 'view/giohang.php';
            break;
        case 'checkout':
            include 'view/checkout.php';
            break;
        case 'hoadon':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $date = date('Y-m-d');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $date, $tongdonhang);
                // insert into cart : $session['cart'] &idbill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($iduser, $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }

                $_SESSION['mycart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include 'view/hoadon.php';
            break;

        case 'mybill':     
            $listbill = loadall_bill($_SESSION['user']['id']);
            include 'view/mybill.php';
            break;
        case 'billctkh':     
                if (isset($_GET['viewct']) && ($_GET['viewct'])) {
                    $idbill = $_GET['viewct'];
                    $ttdh = load_bill_pttt($idbill);
                    $billct = loadall_cart($idbill);
                    $bill = loadone_bill($idbill);
                }
                include 'view/billctkh.php';
            break;
        case 'binhluanform':
            include 'view/binhluan/binhluanform.php';
            break;
        case 'suachua':
            include 'view/suachua.php';
            break;
        default:
            # code...
            break;
    }
} else {

    include 'view/home.php';
}

?>

<?php include 'view/footer.php' ?>