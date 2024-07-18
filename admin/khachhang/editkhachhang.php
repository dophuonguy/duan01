<div class="layout-specing now">
<div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 500px;">
            <h4 class="card-title mt-3 text-center">Cập nhật tài khoản</h4>
            <form method="post" action="index.php?act=updatekhachhang">
                <?php
                    extract($tk);
                ?>
                <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="user" class="form-control" placeholder="Nhập tên đăng nhập" type="text" value="<?=$user?>">
                </div> <!-- form-group// -->
                <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Nhập email" type="email" value="<?=$email?>">
                </div> <!-- form-group// -->
                <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-globe"></i> </span>
                    </div>
                    <input name="address" class="form-control" placeholder="Nhập địa chỉ" type="text" value="<?=$address?>">
                </div> 
                <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="tel" class="form-control" placeholder="Nhập số điện thoại" type="text" value="<?=$tel?>">
                </div>
                <!-- <div class="form-group input-group mt-3">
                    <div class="col-md-4">
                         <p >Giới tính: </p>
                    </div>
                    <div class="col-md-8">
                        <span ><input class="row-md-4" type="radio" name="sex" id=""> Nam   </span>
                        <span ><input class="row-md-4" type="radio" name="sex" id=""> Nữ   </span>
                        <span ><input class="row-md-4" type="radio" name="sex" id=""> Khác   </span>
                    </div>
                </div> -->
                <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="pass" placeholder="Nhập mật khẩu" type="password" value="<?=$pass?>">
                </div> 
                <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="role" class="form-control" placeholder="1-admin 2-khách hàng" type="text" value="<?=$role?>">
                </div>
                <!-- form-group// -->
                <!-- <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Nhập lại mật khẩu" type="password">
                </div>  -->
                <input type="hidden" name="id" value="<?=$id?>" readonly>
                <?php 
                    if (isset($thongbao)&& $thongbao!='') {
                        echo $thongbao;
                    }
                ?>
                <div class="form-group mt-3">
                    <input  type="submit" name="capnhat" class="btn btn-primary btn-block" value="Cập nhật">
                </div> <!-- form-group// -->
            </form>
            <?php 
                    if (isset($load)&& $load) {
                        echo '<script> location.replace("index.php?act=edittaikhoan"); </script>';
                    }
                ?>
        </article>
    </div> <!-- card.// -->
</div>