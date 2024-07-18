   <div class="layout-specing row">
    <form action="index.php?act=khachhang" method="post">
            <div class="mt-3">
                <table class="table">
                    <h2 style='text-align: center;'>Danh sách tài khoản </h2>
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Mã tài khoản</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa Chỉ</th>
                            <th scope="col">Điện thoại</th>
                            <th scope="col">Vai trò</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($listtk as $tk){
                                extract($tk);
                                if ($role=="admin") {   
                                    $vt = 'khách hàng';
                                }
                                echo '
                                <tr>
                                <td><input type="checkbox" name="myCheck[]" value="'.$id.'"></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$vt.'</td>
                                <td><a href="?act=editkhachhang&edit='.$id.'"> <p class="btn btn-primary">Sửa</p></a></td>
                                <td><a href="?act=chitiettk&viewtk='.$id.'"> <p class="btn btn-primary">view</p></a></td>
                                </tr>
                                ';
                            }
                        ?>
                        <?php
                        echo "<tr>";
                        echo '<td colspan="5">';
                        echo "<span>page  </span>";
                        for ($i=1; $i <= $sotrang ; $i++) { 
                            echo "<a href='?act=khachhang&page=$i'>$i </a>";
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
