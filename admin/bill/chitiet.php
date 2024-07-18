<div class="container-fluid relative px-3">
                    <div class="layout-specing">
                        <?php 
                            extract($billct); 
                        ?>
                        <div class="grid md:grid-cols-12 grid-cols-1">
                            <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                                <div class="grid grid-cols-1 gap-6">
                                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                        <h6 class="text-slate-400 mb-0">#<?=$id  ?></h6>
                                        <div class="md:flex mt-6">
                                            <div class="md:w-1/2 md:px-3">
                                                <div class="flex items-center mb-4 justify-between">
                                                    <h5 class="text-xl font-semibold">Địa chỉ thanh toán :</h5>
                                                    <a href="#" class="text-indigo-600 text-lg"><i class="uil uil-edit align-middle"></i></a>
                                                </div>
                                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                                                    <p class="text-lg font-semibold mb-2"><?=$bill_name  ?></p>

                                                    <ul class="list-none">
                                                        <li class="flex">
                                                            <i class="uil uil-map-marker text-lg me-2"></i>
                                                            <p class="text-slate-400"><?=$bill_address ?></p>
                                                        </li>

                                                        <li class="flex mt-1">
                                                            <i class="uil uil-phone text-lg me-2"></i>
                                                            <p class="text-slate-400"><?=$bill_tel ?></p>
                                                        </li>
                                                        <li class="flex mt-1">
                                                            <p class="text-slate-400"><?=$ngaydathang ?></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="md:w-1/2 md:px-3 mt-[30] md:mt-0">
                                                <div class="flex items-center mb-4 justify-between">
                                                <h5 class="text-xl font-semibold">Hình thức thanh toán :</h5>
                                                    <a href="#" class="text-indigo-600 text-lg"><i class="uil uil-edit align-middle"></i></a>
                                                </div>
                                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">

                                                    <ul class="list-none">
                                                        <li class="flex">
                                                            <i >Trạng thái: </i>
                                                            <?php  ?>
                                                            <p class="text-slate-400"><span class="me-1 fw-bold"><td>
                                                                <?php
                                                                            if ($bill_status == 0 ) {
                                                                                $tt = "đơn hàng mới";
                                                                            }else if ($bill_status == 1) {
                                                                                $tt = "đang xử lý";
                                                                            }else if ($bill_status == 2) {
                                                                                $tt = "đang giao hàng";
                                                                            }else {
                                                                                $tt = "Hoàn tất";
                                                                            }
                                                                        echo '<td>'.$tt.'</td>'
                                                                    
                                                                ?>
                                                            </td>
                                                            </p>
                                                        </li>

                                                        <li class="flex mt-1">
                                                            <i>Thanh toán: </i>
                                                            <p class="text-slate-400"><span class="me-1 fw-bold"> 
                                                                <td>
                                                                <?php
                                                                            if ($bill_pttt == 1 ) {
                                                                                $pt = "Trả tiền khi nhận hàng";
                                                                            }else {
                                                                                $pt = "Chuyển khoản qua ngân hàng";
                                                                            }
                                                                        echo '<td>'.$pt.'</td>'
                                                                    
                                                                ?>
                                                                </td>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col l-12 m-12 c-12">
                                <div class="giohang">
                                    <div class="col l-12 m-12 c-12">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th style="min-width: 100px;">Sản Phẩm</th>
                                                    <th>Tên Sản Phẩm</th>
                                                    <th style="min-width: 50px;">Giá</th>
                                                    <th>Số Lượng</th>
                                                    <th style="width: 100px;">Thành Tiền</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody id="listCart">
                                            <?php 
                                                foreach($sphd as $sp){
                                                    extract($sp);
                                                    
                                                    echo '<tr>
                                                    <td>'.$id.'</td>
                                                    <td><img src="../'.$img.'" alt="" width="100px" ></td>
                                                    <td>'.$name.'</td>
                                                    <td>'.$price.'</td>
                                                    <td>'.$soluong.'</td>
                                                    <td>'.$thanhtien.'</td></tr>';
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
                