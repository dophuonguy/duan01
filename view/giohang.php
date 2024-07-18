<section id="main_content">
        <div class="giohang">
            <div class="giohang__header col l-12 m-12 c-12">
                <p>GIỎ HÀNG</p>
            </div>
            <div class="col l-12 m-12 c-12">

                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th style="min-width: 100px;">Tên sản phẩm</th>
                            <th>Giá</th>
                            <th style="min-width: 50px;">Số lượng</th>
                            <th>Tổng</th>
                            <th style="width: 100px;">Xóa</th>
                        </tr>
                    </thead>
                    <tbody id="listCart">
                         <?php
                            $tong = 0;
                            $i = 0;
                           // var_dump($_SESSION['mycart']);
                            foreach ($_SESSION['mycart'] as $cart) {
                                
                                $ttien = $cart[4] * $cart[5];
                                $xoasp = "index.php?act=delcart&idcart=" . $i;
                                $tong += $ttien;

                                //var_dump($_SESSION['mycart']);
                                echo '<tr>
                                <td><img src="' . $cart[2]. '" alt="" class="avatar-lg rounded" style="max-width: 150px;"></td>
                                <td><a href="index.php?act=chitietsanpham&idsp=' . $cart[0] . '" class="text-dark">' . $cart[1] . '</a></td>
                                <td>'. $cart[3] .'</td>
                                <td>'. $cart[4] .'</td>
                                <td>'. $cart[5] .'</td>
                                <td><a href="' . $xoasp . '"><i class="fa fa-trash" aria-hidden="true"></td>
                                </tr>';
                
                                $i += 1;
                            }
                            ?>
                    </tbody>
                </table>
                
            </div>
            <div class="giohang__tong col l-12 m-12 c-12">
                <span>Tổng tiền đơn hàng:</span>
                <span id="spTong" style="padding-left: 10px;"></span>
                <span><u><?php echo $tong ?> đ</u></span>
            </div>
            <div class="giohang__chucnang col l-12 m-12 c-12">
                <button ><a href="index.php?act=delcart">XÓA GIỎ HÀNG</a></button>
                <button onclick="updateCart()">CẬP NHẬT GIỎ HÀNG</button>
                <button onclick="ThanhToan()">THANH TOÁN</button>
            </div>
        </div>
    
</section>
    <script>
        function ThanhToan() {
            window.location.href = "index.php?act=checkout";
        }
        var list = JSON.parse(localStorage.getItem('giohang'));
        function LoadData() {
            var str = "";
            var n = 0;
            var t = 0;
            for (x of list) {
                t += x.price * x.quantity;
                str += `<tr>                      
                        <td><img style="width: 80px; height: 80px;" src="`+ x.image + `"> </td>
                        <td class="tensp" style="font-weight: 600;">`+ x.name + `</td>
                        <td style="font-weight: 600;">`+ x.price + `₫</td>
                        <td style="font-weight: 600;"> 
                            <button onclick="Giam(`+ x.id + `)">-</button>
                            <input id="q_`+ Number(x.id)+`" onchange="updateQuantity(`+ x.id + `)" type="text" value="`+ x.quantity + `" style="width: 30px;" >
                            <button onclick="Tang(`+ x.id + `)">+</button>
                        </td>
                        <td style="font-weight: 600;">`+ (x.price * x.quantity) + `₫</td>
                        <td><i onclick="Xoa(`+ x.id + `)" class="fas fa-trash-alt fa-lg" style="color:#828282; cursor: pointer;"></i></td>
                    </tr>
                 `;
            }
            document.getElementById("listCart").innerHTML = str;
            $("#spTong").text(t);
        }
        function XoaCart() {
            localStorage.setItem('giohang', null);
            location.reload();
        }
        function Xoa(id) {
            var index = list.findIndex(x => x.id == id);
            if (index >= 0) {
                list.splice(index, 1);
            }
            LoadData();
        }
        function updateCart() {
            localStorage.setItem('giohang', JSON.stringify(list));
             alert("Đã cập nhật thông tin giỏ hàng thành công");
        }
        function Tang(id) {
            var index = list.findIndex(x => x.id == id);
            if (index >= 0) {
                list[index].quantity += 1; 
            }
            LoadData();
        }
        function Giam(id) {
            var index = list.findIndex(x => x.id == id);
            if (index >= 0 && list[index].quantity >=1) {
                list[index].quantity -= 1; 
            }
            LoadData();
        }
        function updateQuantity(id) {
            var quantity = Number($('#q_'+id).val());
            var index = list.findIndex(x => x.id == id);
            if (index >= 0 && list[index].quantity >=1) {
                list[index].quantity = quantity; 
            }
            LoadData();
        }
        LoadData();
    </script>