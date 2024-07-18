<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/dashboard/faqs.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 14:56:02 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Trang admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="2.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
        <link rel="stylesheet" href="../view/css/css_gio_hang.css">
    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->


        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="index.php?act=category"><img src="assets/images/logo-light.png" height="24" alt=""></a>
                </div>

                <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">


                    <!--<li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-apps me-2"></i>Ứng dụng</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="calendar.php">Lịch</a></li>
                            </ul>
                        </div>
                    </li> 

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-user me-2"></i>Thông tin người dùng</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="?act=profile">Hồ sơ</a></li>
                                <li><a href="profile-setting.php">Cài đặt cấu hình</a></li>
                            </ul>
                        </div>
                    </li> -->

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-file me-2"></i>Pages</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="?act=category">Danh mục</a></li>
                                <li><a href="?act=product">Sản Phẩm</a></li>
                                <li><a href="?act=khachhang">Khách hàng</a></li>
                                <!-- <li><a href="?act=binhluan">Bình luận</a></li> -->
                                <!-- <li><a href="index.php?act=thongke">Thống kê</a></li>-->
                            </ul>
                        </div>
                    </li>

                    <!-- <li class="">
                        <a href="ui-components.php"><i class="uil uil-chart-line me-2"></i>Thành phần giao diện người
                            dùng</a>
                    </li> -->

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-invoice me-2"></i>Hóa đơn</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="?act=listbill">danh sách đơn hàng</a></li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                <!-- sidebar-menu  -->
            </div>
        </nav>
            <main class="page-content bg-gray-50 dark:bg-slate-800">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar flex justify-between">
                        <div class="flex items-center space-x-1">
                            <!-- Logo -->
                            <a href="#" class="xl:hidden block me-2">
                                <img src="assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                                <span class="md:block hidden">
                                    <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                            </a>
                            <!-- Logo -->

                            <!-- show or close sidebar -->
                            <a id="close-sidebar" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" href="javascript:void(0)">
                                <i data-feather="menu" class="h-4 w-4"></i>
                            </a>
                            <!-- show or close sidebar -->
            
                            <!-- Searchbar -->
                            <div class="ps-1.5">
                                <div class="form-icon relative sm:block hidden">
                                    <i class="uil uil-search absolute top-1/2 -translate-y-1/2 start-3"></i>
                                    <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-3xl outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                                </div>
                            </div>
                            <!-- Searchbar -->
                        </div>

                        <ul class="list-none mb-0 space-x-1">
                            <!-- Country Dropdown -->
                            <!-- Country Dropdown -->

                            <!-- Shop cart Dropdown -->
                            
                            <!-- Shop cart Dropdown -->

                            <!-- Notification Dropdown -->
                            <!--end dropdown-->
                            <!-- Notification Dropdown -->
            
                            <!-- User/Profile Dropdown -->
                                <a href="?act=dangxuat" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-sign-out-alt me-2"></i>Logout</a>
                                <!-- Dropdown menu -->
                            <!-- User/Profile Dropdown -->
                        </ul>
                    </div>
                </div>