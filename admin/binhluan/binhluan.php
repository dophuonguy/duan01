
    
    <div class="layout-specing row">
    <form action="" method="post">
        <div class="mt-3">
            <table class="table">
                <h2 style='text-align: center;'>Bình Luận</h2>
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượt bình luận</th>
                        <th scope="col">Xem bình luận SP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($spbl as $bl) {
                        extract($bl);
                        echo '
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$soluotbl.'</td>
                            <td><a href="?act=dsbinhluan&idsp='.$id.'">Chi tiết</a></td>
                        </tr>';
                    } ?>
                    
                </tbody>
            </table>
        </div>
    </form>
    </div>
