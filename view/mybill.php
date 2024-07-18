<section id="main_content">
    <form action="index.php?act=product" method="post" class="giohang" >
            <div class="giohang">
            </div>
            <div class="giohang__header col l-12 m-12 c-12">
                <p>Quản lý Đơn hàng</p>
            </div>
            <div class="col l-12 m-12 c-12">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã Đơn hàng</th>
                            <th>Tên Khách hàng</th>
                            <th style="min-width: 100px;">Ngày đặt hàng</th>
                            <th style="min-width: 50px;">Số lượng mặt hàng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th style="min-width: 100px;">trình trạng đơn hàng</th>
                            <th style="min-width: 100px;">View</th>
                        </tr>
                    </thead>
                    <tbody id="listCart">
                        <?php
                        $i=1;
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $soluong = loadall_cart_count($bill['id']);

                            echo '<tr>
                                <td>'.$i++.'</td>
                                <td>#'.$bill['id'].'</td>
                                <td>'.$bill['bill_name'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$soluong.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                <td>
                                    <a href="?act=billctkh&viewct='.$bill['id'].'"><p >view</p></a>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </form>
</section>
