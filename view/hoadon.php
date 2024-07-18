<?php 
  if(isset($bill)&& (is_array($bill))){
    extract($bill);
  }
?>
<section class="success">
        <div class="success-top">
            <p>ĐẶT HÀNG THÀNH CÔNG</p>
        </div>
        <div class="success-text">
          
            <p>Chào <span style="font-size: 20px; color: #378000;"><?=$bill['bill_name'];?></span>, đơn hàng của bạn với mã <a
                    style="font-size: 20px; color: #378000;" >#<?=$bill['id'];?></strong></a> đã được đặt thành công. <br>
                Đơn hàng của bạn đã được xác nhận tự động. <br>
                <span style="font-weight: bold;">Hiện tại do đang trong Chương trình Sale lớn, đơn hàng của quý khách sẽ
                    gửi chậm hơn so với thời gian dự kiến từ 5-10 ngày. Rất mong quý khách thông cảm vì sự bất tiện
                    này!</span><br>
                <span style="color: red;">(Lưu ý: DŨNG MOBILE sẽ không gọi xác nhận đơn hàng, đơn hàng đươc xử lý tự động
                    và sẽ giao cho bạn trong thời sớm nhất)</span><br>
                Cám ơn <span style="font-size: 20px; color: #378000;"><?=$bill['bill_name'];?></span> đã tin dùng sản phẩm của IVY
                moda.
            </p>
        </div>
        <div class="success-button">
            <a href="index.php"><button>TIẾP TỤC MUA SẮM</button></a>
        </div>
        <p>CHI TIẾT ĐƠN HÀNG</p>
      <section id="main_content">
          <div class="giohang">
            <div class="col-xl-8">
            <ul class="list-unstyled">
              <li class="text-muted">Đến: <span style="color:#5d9fc5 ;"><?=$bill['bill_name'];?></span></li>
              <li class="text-muted">Địa chỉ: <?=$bill['bill_address'];?></li>
  
              <li class="text-muted"><i class="fa fa-envelope"></i> <?=$bill['bill_email'];?></li>
              <li class="text-muted"><i class="fas fa-phone"></i> <?=$bill['bill_tel'];?></li>
            </ul>
          </div>
          <div class="col-xl-4">
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">ID:</span>#<?=$bill['id'];?></li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Ngày đặt hàng: </span> <?=$bill['ngaydathang'];?></li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="me-1 fw-bold">Trạng thái:</span> 
              <?php 
                switch ($bill['bill_status']) {
                  case '0':
                    echo 'đơn hàng mới';
                    break;
                  case '1':
                    echo 'đang xử lý';
                    break;
                  case '2':
                    echo 'đang giao hàng';
                    break;
                  case '3':
                    echo 'đã giao hàng';
                    break;
                  default:
                    # code...
                    break;
                }
              ?>
            </li>
            </ul>
          </div>
            <div class="col l-12 m-12 c-12">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th style="min-width: 100px;">Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th style="min-width: 50px;">Giá</th>
                            <th>Số Lượng</th>
                            <th style="width: 100px;">Thành Tiền</th>
                        </tr>
                    </thead>
                    <tbody id="listCart">
                    <?php 
                        $i = 1;
                        foreach ($billct as $cart) {
                          echo '
                          <tr>
                          <th>'.$i++.'</th>
                          <td><img src="'.$cart['img'].'" alt="" style="max-width: 100px;"></td>
                          <td>'.$cart['name'].'</td>
                          <td>'.$cart['price'].'</td>
                          <td>'.$cart['soluong'].'</td>
                          <td>'.$cart['thanhtien'].'</td>
                          </tr>
                          ';              

                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="giohang__tong col l-12 m-12 c-12">
                <span>Tổng tiền đơn hàng:</span>
                <span id="spTong" style="padding-left: 10px;"><?=$bill['total'];?></span>
                <span><u>đ</u></span>
            </div>
        </div>
    </section>


