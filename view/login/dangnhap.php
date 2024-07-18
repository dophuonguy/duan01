<div class="header-main">
		       <h1>Đăng Nhập</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="index.php?act=dangnhap" method="post">
						<input type="text" class="form-control" value="Tên Đăng Nhập" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên Đăng Nhập';}"/>
					    <input type="password" class="form-control" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="?act=quenmatkhau">Quên Mật khẩu?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" name="dangnhap" class="btn btn-primary btn-block" value="Đăng nhập">
                        <div class="forgot">
						 	<h6><a href="?act=dangky">Đăng ký</a></h6>
						 </div>
                        <?php if (isset($thongbao) && $thongbao !='') {
                    echo $thongbao;
                
                } ?>
					</form>	
					<div class="header-left-top">
						<div class="sign-up"> <h2>or</h2> </div>
					
					</div>
					<div class="header-social wthree">
							<a href="#" class="face"><h5>Facebook</h5></a>
							<a href="#" class="twitt"><h5>Twitter</h5></a>
						</div>
                        <?php 
                        if (isset($_SESSION['user'])&& $_SESSION['user']!="") {
                            echo '<script> location.replace("index.php"); </script>';
                        }  
                        ?>	
				</div>
				</div>
			  
			</div>
		</div>
