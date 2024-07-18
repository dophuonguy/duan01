<div class="header-main">
    
</div>
<div class="container mt-3" style="max-width: 500px;">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 500px;">
            <h4 class="card-title mt-3 text-center">Quên mật khẩu</h4>
            <form method="post" action="index.php?act=quenmatkhau">
                 <!-- form-group// -->
                <div class="form-group input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Nhập email" type="email">
                </div> <!-- form-group// -->
                 <!-- form-group// -->
                <div class="form-group mt-3">
                    <button type="submit" name="guimail"  class="btn btn-primary btn-block"> gửi </button>
                </div> <!-- form-group// -->
                <?php if (isset($thongbao)&& $thongbao !='') {
                    echo $thongbao;
                } ?>
                <p class="text-center mt-3">Bạn chưa có tài khoản? <a href="?act=dangky">Đăng ký</a> </p>
                <p class="text-center mt-3">Bạn chưa có tài khoản? <a href="?act=dangnhap">Đăng nhập</a> </p>
                
            </form>
            
        </article>
    </div> <!-- card.// -->

</div>