<div class="layout-specing row">
        <form action="index.php?act=product" method="post">
            <div class="mt-3">
                <table class="table">
                    <h2 style='text-align: center;'>Sản Phẩm</h2>
                    <div>
                            <input type="text" name="kyw">
                    
                            <select name="iddm" id="">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach ($dmsp as $dm) {
                                    extract($dm);
                                    echo '<option value="' . $id . '">' . $name . '</option>';
                                }
                                ?>
                            </select>
                            <input type="submit" name="productok" value="GO">
                    </div>
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">danh mục</th>
                            <th scope="col">Mô tả sản phẩm</th>
                            <th scope="col">Lượt xem</th>
                            <th scope="col">sửa</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $hinh =  get_anh_san_pham_one($id);
                            // var_dump($hinh);
                            echo '  
                                <tr>
                                <td><input type="checkbox" name="myCheck[]" value="' . $id . '"></td>
                                <td>#' . $id . '</td>
                                <td><img src="'.$img_path_admin.$hinh['url_anh'].'" alt=""></td>
                                <td>' . $name . '</td>
                                <td>' . $iddm . '</td>
                                <td>' . $mota . '</td>
                                <td>' . $luotxem . '</td>
                                <td>
                                    <a href="?act=editproduct&edit=' . $id . '" class="btn btn-primary">Sửa</a>
                                </td>
                                <td>
                                    <a href="?act=viewsp&view=' . $id . '" class="btn btn-primary">view</a>
                                </td>
                                </tr>
                                ';
                        }
                        ?>
                        <?php
                        echo "<tr>";
                        echo '<td colspan="5">';
                        echo "<span>page  </span>";
                        for ($i = 1; $i <= $sotrang; $i++) {
                            echo "<a href='?act=product&page=$i'>$i </a>";
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
                <a href="?act=addproduct"><input type="button"  value="Nhập thêm"></a>
            </div>
        </form>


</div>
