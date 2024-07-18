<div class="layout-specing row">
    <form action="index.php?act=category" method="post" enctype="multipart/form-data">
        <div class="mt-3">
            <table class="table">
                <h2 style='text-align: center;'>Danh mục</h2>
                <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Mã danh mục</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">sửa</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dmsp as $dm) {
                        extract($dm);
                        $hinhpath= $img_path_admin . $img_dm;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' width='50px' >";
                        }else{
                            $hinh="No photo";
                        }
                        
                        echo '
                        <tr>
                        <td><input type="checkbox" name="myCheck[]" value="'.$id.'"></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$hinh.'</td>
                        <td><a href="?act=editcategory&edit='.$id.'"> <p class="btn btn-primary">Sửa</p></a></td>
                        </tr>
                        ';
                    } ?>
                    <?php
                    echo "<tr>";
                    echo '<td colspan="5">';
                    echo "<span>page  </span>";
                    for ($i=1; $i <= $sotrang ; $i++) { 
                        echo "<a href='?act=category&page=$i'>$i </a>";
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
            <a href="?act=addcategory"><input type="button" value="Nhập thêm"></a>
        </div>
    </form>
</div>
</div>
