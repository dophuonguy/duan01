<div class="container-fluid relative px-3">
                    <div class="layout-specing">
                        <?php
                            extract($tk);
                            if ($role=="admin") {
                                $vt = 'khách hàng';
                            }else{
                                $vt = 'khách hàng';
                            }
                        ?>
                        <div class="grid md:grid-cols-12 grid-cols-1">
                            <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                                <div class="grid grid-cols-1 gap-6">
                                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                            <div class="mt-4">
                                                <h5 class="text-lg font-semibold">Mã tài khoản: </h5>
                                                <p class="text-slate-400"><?=$id ?></p>
                                            </div>
                                    </div>

                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                                            <h5 class="text-xl font-semibold">Thông tin Tài khoản :</h5>
                                            <div class="mt-6">
                                                <div class="flex items-center">
                                                    <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Email :</h6>
                                                        <a href="#" class="text-slate-400"><?=$email ?></a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Tên đăng nhập: </h6>
                                                        <a href="#" class="text-slate-400"><?=$user ?></a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="italic" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Vai trò :</h6>
                                                        <a href="#" class="text-slate-400"><?=$vt ?></a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Địa chỉ :</h6>
                                                        <a href="#" class="text-slate-400"><?=$address ?></a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Số điện Thoại :</h6>
                                                        <a href="#" class="text-slate-400"><?=$tel ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                                            <h5 class="text-xl font-semibold">Danh sách bình luận:</h5>
                                            <form action="index.php?act=dsbinhluan&idsp=<?php echo $idkh ?>" method="post">
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
                                    </div>

                                        <h5 class="text-xl font-semibold" style="text-align: center;">Đơn hàng của tôi :</h5>
                                            <table class="table" style="margin: 0 auto;" >
                                                <div style="margin: 0 auto;">
                                                        <input type="text" placeholder="mã đơn hàng" name="kyw">
                                                        <input type="submit" name="listbillok" value="GO">
                                                </div>
                                                <thead>
                                                    <tr>
                                                        <th scope="col"> </th>
                                                        <th scope="col">Mã đơn hàng</th>
                                                        <th scope="col">Khách hàng</th>
                                                        <th scope="col">Số lượng hàng</th>
                                                        <th scope="col">Giá trị đơn hàng</th>
                                                        <th scope="col">Tình trạng đơn hàng</th>
                                                        <th scope="col">View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach ($dsbill as $bill) {
                                                            extract($bill); 
                                                            $soluong = loadall_cart_count($bill['id']);
                                                            $ttdh = get_ttdh($bill['bill_status']);
                                                            echo '<tr>
                                                                <td><input type="checkbox" name="myCheck[]" value="'.$bill['id'].'"></td>
                                                                <td>'.$bill['id'].'</td>
                                                                <td>'.$bill['bill_name'].'</br>'.$bill['bill_email'].'</br>'.$bill['bill_address'].'</br>'.$bill['bill_tel'].'</td>
                                                                <td>'.$soluong.'</td>
                                                                <td>'.$bill['total'].'</td>
                                                                <td>'.$ttdh.'</td>
                                                                <td><a href="?act=chitietbill&viewb='.$bill['id'].'"><p class="btn btn-primary">view</p></a></td>
                                                            </tr>';
                                                        }
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>