<div class="container mt-3" style="max-width: 500px;">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 500px;">
            <h4 class="card-title mt-3 text-center">Cập nhật tài khoản</h4>
            <?php
                if (isset($_SESSION['user'])&& (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
            ?>
            <form method="post" action="index.php?act=edittaikhoan">
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
                    <input  type="submit" name="capnhat" value="Cập nhật">
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