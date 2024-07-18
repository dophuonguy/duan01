<?php
session_start();
include '../model/pdo.php';
include '../model/sanpham.php';
include '../model/danhmuc.php';
include '../model/binhluan.php';
include '../model/taikhoan.php';
include '../model/giohang.php';
include '../global.php';

if ($_SESSION['s_user']['role'] == "admin") {
    include 'header.php';

    if (isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        switch ($act) {
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
            //start danh mục
            case 'addcategory':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = $img_path_admin;
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    add_danhmuc_sp($_POST['TenDMSP'], $hinh);
                    $thongbao = "Thêm thành công";
                }
                include 'danhmuc/addcategory.php';
                break;


            case 'category':
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_danhmuc_dachon($delete);
                }
                $sohang = 10;
                $sotrang = sotrang_dm($sohang);
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $starpage = starpage($page, $sohang);
                $dmsp = loadall_danhmuc_phantrang($starpage, $sohang);
                include 'danhmuc/category.php';
                break;

            case 'editcategory':
                if (isset($_GET['edit']) && ($_GET['edit'] > 0)) {
                    $iddm = $_GET['edit'];
                    $dmsp = load_danhmuc($iddm);
                }
                include 'danhmuc/editcategory.php';
                break;

            case 'updatecategory':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $iddm = $_POST['IDDMSPUP'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = $img_path_admin;
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_danhmuc($iddm, $_POST['TenDMSPUP'], $hinh);
                    $thongbao = "sửa thành công";
                }
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_danhmuc_dachon($delete);
                }
                $sohang = 10;
                $sotrang = sotrang_dm($sohang);
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $starpage = starpage($page, $sohang);
                $dmsp = loadall_danhmuc_phantrang($starpage, $sohang);
                include 'danhmuc/category.php';
                break;
            //end danh mục

            // start sản phẩm
            case 'addproduct':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $id_sp = add_sanpham($_POST['TenSP'], $_POST['Gia'], $_POST['MoTaSP'], $_POST['IDDMSP']);

                    foreach ($_FILES['images']['name'] as $tenfile) {
                        $i = 0;
                        var_dump($tenfile);
                        $basename = basename($tenfile);
                        $dest = "../upload/" . $basename;
                        $filetem = $_FILES["images"]["tmp_name"][$i];
                        move_uploaded_file($filetem, $dest);
                        add_anh($id_sp, $basename);
                        $i++;
                    }

                    $thongbao = 'thêm thành công';
                }


                $dmsp = loadall_danhmuc();
                include 'sanpham/addproduct.php';
                break;
            case 'product':
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_sanpham_dachon($delete);
                }
                $dmsp = loadall_danhmuc();
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                if (isset($_POST['productok']) && ($_POST['productok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $sohang = 10;
                $sotrang = sotrang_sp($sohang, $iddm, $kyw);

                $starpage = starpage($page, $sohang);
                $dssp = loadall_sanpham_phantrang($starpage, $sohang, $iddm, $kyw);

                include 'sanpham/product.php';
                break;
            case 'editproduct':
                $dmsp = loadall_danhmuc();
                $ctsp = load_sanpham_edit($_GET['edit']);
                if (isset($_GET['id_anh']) && ($_GET['id_anh'])) {
                    xoa_anh($_GET['id_anh']);
                }
                include 'sanpham/editproduct.php';
                break;

            case 'updateproduct':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    update_sanpham($_POST['idSP'], $_POST['upTenSP'], $_POST['upGia'], $_POST['MoTaSP'], $_POST['upTenLoaiSP']);
                    // print_r(count($_FILES['images']['name']));
                    // var_dump($_FILES['images']['name']);

                    foreach ($_FILES['images']['name'] as $tenfile) {
                        $i = 0;
                        // var_dump($tenfile);
                        $basename = basename($tenfile);
                        $dest = '../upload/' . $basename;
                        $filetem = $_FILES["images"]["tmp_name"][$i];
                        move_uploaded_file($filetem, $dest);
                        if ($tenfile!="") {
                            add_anh($_POST['idSP'], $basename);
                        }
                        $i++;
                    }



                }
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_sanpham_dachon($delete);
                }
                $dmsp = loadall_danhmuc();
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                if (isset($_POST['productok']) && ($_POST['productok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $sohang = 10;
                $sotrang = sotrang_sp($sohang, $iddm, $kyw);
                $starpage = starpage($page, $sohang);
                $dssp = loadall_sanpham_phantrang($starpage, $sohang, $iddm, $kyw);
                include 'sanpham/product.php';
                break;
            case 'viewsp':
                if (isset($_GET['view']) && (!empty($_GET['view']))) {
                    $idsp = $_GET['view'];
                    $ctsp = load_chitiet_sanpham($idsp);
                    $dsbl = load_binhluan($idsp);
                    $ds_anh_sp = load_anh($idsp);
                    //var_dump($ctsp);
                    //var_dump($dsbl);

                }



                include 'sanpham/view.php';
                break;

            case 'binhluan':
                $spbl = load_soluot_binhluan();
                include 'binhluan/binhluan.php';
                break;

            case 'dsbinhluan':
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_binhluan_dachon($delete);
                }
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $idsp = $_GET['idsp'];
                }
                $sohang = 10;
                $sotrang = sotrang_binhbuan($sohang, $idsp);
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $starpage = starpage($page, $sohang);
                $dsbl = loadall_binhluan_phantrang($starpage, $sohang, $idsp);

                include 'binhluan/dsbinhluan.php';
                break;

            case 'khachhang':
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_taikhoan_dachon($delete);
                }
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $sohang = 10;
                $sotrang = sotrang_tk($sohang);
                $starpage = starpage($page, $sohang);
                $listtk = loadall_taikhoan_phantrang($starpage, $sohang);
                include 'khachhang/khachhang.php';
                break;

            case 'editkhachhang':
                if (isset($_GET['edit']) && ($_GET['edit'] > 0)) {
                    $id = $_GET['edit'];
                    $tk = load_taikhoan_edit($id);
                }
                include 'khachhang/editkhachhang.php';
                break;

            case 'updatekhachhang':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    $role = $_POST['role'];
                    update_taikhoan_admin($id, $user, $pass, $email, $address, $tel, $role);
                }
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_taikhoan_dachon($delete);
                }
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $sohang = 10;
                $sotrang = sotrang_tk($sohang);
                $starpage = starpage($page, $sohang);
                $listtk = loadall_taikhoan_phantrang($starpage, $sohang);
                include 'khachhang/khachhang.php';
                break;
            case'chitiettk':
                if (isset($_GET['viewtk']) && (!empty($_GET['viewtk']))) {
                    $idkh = $_GET['viewtk'];
                    $tk = load_khachhang_chitiet($idkh);
                    $dsbill = loadall_bill($idkh);
                    $dsbl = load_binhluan($idkh);
                    //var_dump($tk);
                }
                include 'khachhang/chitiet.php';
                break;

            case 'listbill':
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_donhang_dachon($delete);
                }
                $id = 0;
                if (isset($_POST['listbillok']) && ($_POST['listbillok'])) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = '';
                }
                $listbill = loadall_bill($id, $kyw);
                include 'bill/listbill.php';
                break;

            case 'editbill':
                if (isset($_GET['edit']) && (!empty($_GET['edit']))) {
                    $bill = load_bill_edit($_GET['edit']);
                }
                include 'bill/editbill.php';
                break;

            case 'updatebill':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    update_bill($_POST['id'], $_POST['ttdh']);
                }
                if (isset($_POST['delete']) && (!empty($_POST['myCheck']))) {
                    $delete = array_values($_POST['myCheck']);
                    delete_donhang_dachon($delete);
                }
                $id = 0;
                if (isset($_POST['listbillok']) && ($_POST['listbillok'])) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = '';
                }
                $listbill = loadall_bill($id, $kyw);
                include 'bill/listbill.php';
                break;

            case 'thongke':
                $listbill = loadall_thongke();
                include 'thongke/thongke.php';
                break;

            case 'bieudo':
                $listdanhmuc = loadall_thongke();
                include 'thongke/bieudo.php';
                break;
            case 'chitietbill':
                if (isset($_GET['viewb']) && (!empty($_GET['viewb']))) {
                    $idbill = $_GET['viewb'];
                    $billct = load_bill_chitiet($idbill);
                    $pttt =load_bill_pttt($idbill);
                    $sphd = load_sp_hd($idbill);
                    //var_dump($ctsp);
                    //var_dump($dsbl);
                }
                include 'bill/chitiet.php';
                break;
            case 'dangxuat':
                dangxuat();
                if (isset($_SESSION['s_user'])) {
                    echo '<script> location.replace("index.php"); </script>';
                }
                break;
            default:
                include "home.php";
                break;
        }
    } else {
        include 'home.php';
    }

    include 'footer.php';
} else {
    header("Location: login.php");
}



