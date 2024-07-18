<div class="layout-specing row">
<form action="" method="post">
        <div class="mt-3">
            <table class="table">
                <h2 style='text-align: center;'>Thống kê</h2>
                <thead>
                    <tr>
                        <th scope="col">Mã loại hàng</th>
                        <th scope="col">Loại hàng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá cao nhất</th>
                        <th scope="col">Giá thấp nhất </th>
                        <th scope="col">Giá trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        echo '
                            <tr>
                                <td>'.$idbill.'</td>
                                <td>'.$name.'</td>
                                <td>'.$sl.'</td>
                                <td>'.$max.'</td>
                                <td>'.$min.'</td>
                                <td>'.$avg.'</td>
                            </tr>
                            ';
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <div class="">
            <a href="?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </form>
</div>
</div>