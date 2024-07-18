<div class="layout-specing now">
<form action="index.php?act=dsbinhluan&idsp=<?php echo $idsp?>" method="post">
        <div class="mt-3">
            <table class="table">
                <h2 style='text-align: center;'>Danh sách tài khoản </h2>
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
                            foreach ($dsbl as $bl ) {
                                extract($bl);
                                echo '
                                        <tr>
                                        <td><input type="checkbox" name="myCheck[]" value="'.$id.'"></td>
                                        <td>'.$id.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        </tr>
                                ';
                            }

                        ?>
                           

                            <?php
                    echo "<tr>";
                    echo '<td colspan="5">';
                    echo "<span>page  </span>";
                    for ($i=1; $i <= $sotrang ; $i++) { 
                        echo "<a href='?act=dsbinhluan&idsp=$id&page=$i'>$i </a>";
                    }
                    echo "</td>";
                    echo "</tr>";
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