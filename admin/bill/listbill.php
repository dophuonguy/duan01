<div class="layout-specing row">
    <form action="index.php?act=listbill" method="post" enctype="multipart/form-data">
        <div class="mt-3">
            <table class="table">
                <h2 style='text-align: center;'>Danh sách đơn hàng</h2>
                <div>
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
                        <th scope="col">Thao tác</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($listbill as $bill) {
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
                                <td><a href="?act=editbill&edit='.$bill['id'].'"><p class="btn btn-primary">Sửa</p></a></td>
                                <td><a href="?act=chitietbill&viewb='.$bill['id'].'"><p class="btn btn-primary">view</p></a></td>
                            </tr>';
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