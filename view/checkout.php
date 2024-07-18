  <section>
    <form method="post" action="index.php?act=hoadon">
        <div class="col-6 col-s-12 form-nhap">
            <h2>THÔNG TIN THANH TOÁN</h2>
            
                <?php
                 if (isset($_SESSION['user'])) {
                    $name = $_SESSION['user']['user'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                } else {
                    $name = '';
                    $address = '';
                    $email = '';
                    $tel = '';
                }
                    ?>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-12 col-s-12">
                        <label for="exampleFormControlInput1" >Họ Tên <span id="s_hdem" style="color: red;">*</span></label><br>
                        <input id="txt_hdem" type="text" name="name" value="<?= $name ?>"  id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-12 col-s-12">
                        <label for="exampleFormControlInput2" >Địa chỉ:</label><br>
                        <input type="text" id="txt_dchi" name="address" class="form-control" value="<?= $address ?>" id="exampleFormControlInput2" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-12 col-s-12">
                        <label for="exampleFormControlInput3">Email <span style="color: red;" id="s_email"> </span> </label><br>
                        <input type="email" id="txt_email" name="email" value="<?= $email ?>"id="exampleFormControlInput3" required>
                    </div>
                </div>

                <div class="row" style="margin-top: 5px;">
                    <div class="col-12 col-s-12">
                        <label for="exampleFormControlInput3">Số điện thoại <span id="s_dienthoai"> </span></label><br>
                        <input type="text" id="txt_dienthoai" name="tel"  value="<?= $tel ?>" id="exampleFormControlInput4" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                    <label for="slt_qgia">Phương thức thanh toán <span id="s_qgia" style="color: red;">*</span> </label><br>
                        <div class="col-12 col-s-12">
                                <input type="radio" name="pttt" id="" value="1" checked> Trả tiền khi nhận hàng
                                <input type="radio" name="pttt" id="" value="2"> Chuyển khoản ngân hàng
                        </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                </div>
                
        </div>
        <div class="col-6 col-s-12 from-thanhtoan">
            <h2>ĐƠN HÀNG CỦA BẠN</h2>
            <div class="row thanhtoan">
                <div class="col-12 col-s-12" style="text-align: left;">
                    <label>SẢN PHẨM</label>
                </div>
                <div class="col-12 col-s-12" style="text-align: center;">
                    <label>SỐ LƯỢNG</label>
                </div>
                <div class="col-12 col-s-12" style="text-align: right;">
                    <label>Tổng</label>
                </div>
            </div>
            <?php
                $tong = 0;
                $i = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $img_path . $cart[2];
                    $ttien = $cart[4] * $cart[5];
                    $xoasp = "index.php?act=delcart&idcart=" . $i;
                    $tong += $ttien; 
            ?>
            <div id="spham">
                <div class="row thanhtoan">
                    <div class="col-12 col-s-12" style="text-align: left;">
                        <?php echo '<td>' . $cart[1] . '</td>'; ?>
                    </div>
                    <div class="col-12 col-s-12" style="text-align: center;">
                        <?php echo '<td>' . $cart[4] . '</td>'; ?>
                    </div>
                    <div class="col-12 col-s-12" style="text-align: right;">
                        <?php echo '<td>' . $ttien . '</td>'; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row tong">
                <div class="col-8 col-s-12" style="text-align: left;">
                    <label>TỔNG</label>
                </div>
                <div class="col-4 col-s-12" style="text-align: right;">
                    <label id="tt"><?php echo '<td>
                                        ' . $tong . '
                                        </td>'; ?></label>đ
                </div>
            </div>
            <div class="row thanhtoan">
                <div class="col-12 col-s-12" style="text-align: left;">
                    <button type="submit" name="dongydathang" value="Đặt hàng">ĐẶT HÀNG</button>         
                </div>
            </div>
        </div>
    </form>
    </section>
    <?php

?>
    <script>
        var list = JSON.parse(localStorage.getItem('giohang'));
        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        function DatHang() {
            var hodem = $('#txt_hdem').val();
            if (hodem == null || hodem == '' || hodem.length > 30) {
                $('#s_hdem').html('Sai định dạng họ đệm');
            } else {
                $('#s_hdem').html('*');
            }
            var email = $('#txt_email').val();
            if (email != '' && !validateEmail(email)) {
                $('#s_email').html('Sai định dạng email');
            } else {
                $('#s_email').html('');
            }
            //Print
            var str = `
                <section style="text-align: center;">
                    <h1>HÓA ĐƠN GIÁ TRỊ GIA TĂNG</h1>
                </section>
                <div style="font-style: italic;">
                    05 tháng 05 năm 2021        
                </div>
                <div class="donvi">Tên đơn vị bán hàng: Công ty ABC</div>
                <div>Người mua hàng:`+hodem+`</div>
                <div>Email:`+email+`</span></div>
                <table style="width: 100%;">
                    <tr>
                        <th>Tên hàng</th>
                        <th>Số lượng</th>
                        <th>Thành tiên</th>
                    </tr>            
            `;
            var n = 0;
            for (x of list) {
                str += `
                <tr>
                    <td>`+(++n)+`</td>
                    <td>`+x.name+`</td>
                    <td>`+x.quantity+`</td>
                    <td>`+ (x.price * x.quantity) +`</td>
                 </tr>
                `;
            }
            str += `</table>
            `;
            printHtml(str);
        }
        function LoadData() {
            var str = "";
            var t = 0;
            for (x of list) {
                t += x.price * x.quantity;
                str += `
                <div class="row thanhtoan">
                    <div class="col-8 col-s-12" style="text-align: left;">
                        <label class="tensp">` + x.name + `*` + x.quantity + `</label>
                    </div>
                    <div class="col-4 col-s-12" style="text-align: right;">
                        <label>`+ (x.price * x.quantity) + `đ</label>
                    </div>
                </div>
                `;
            }
            $('#spham').html(str);
            $('#tt').html(t);
        }
        LoadData();
        function printHtml(data) {
            let popupWin = window.open('', '_blank', 'top=0,left=0,height=100%,width=auto');
            popupWin.document.write(`
                <html>
                    <head>
                    <title>Print tab</title>
                    <style>
                        * {
                            margin: 0;
                            padding: 0;
                        }
                        table {
                            width: 100%;
                        }
                        .donvi {
                            font-size: 14px;
                            font-weight: bold;
                        }
                        body {
                            width: 1000px;
                            margin: 0 auto;
                        }
                    </style>
                    </head>
                <body onload="window.print();window.close()">${data}</body>
                </html>`
            );
            popupWin.document.close();
        }
        function printHtmlWithUrl(url) {
            debugger;
            let newWindow = window.open(url, '_blank', 'top=0,left=0,height=100%,width=auto');
            newWindow.focus();
            newWindow.print();
            newWindow.close();
        }
    </script>