<?php 
    function load_taikhoan(){
        $sql = "SELECT * FROM `taikhoan` WHERE 1 ORDER BY id DESC";
        $kqsql =pdo_query($sql);
        return $kqsql;
    }
    function load_taikhoan_edit($id){
        $sql = "SELECT * FROM `taikhoan` WHERE id = ".$id;
        $kqsql =pdo_query_one($sql);
        return $kqsql;
    }
    function loadall_taikhoan_phantrang($starpgae,$sohang,){
        $sql = "SELECT * FROM `taikhoan` WHERE 1 ORDER BY id LIMIT $starpgae,$sohang";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
      }
      function sotrang_tk($sohang){
          $sql ="SELECT COUNT(id) AS'id' FROM taikhoan";
          $kqsql = pdo_query_one($sql);
          extract($kqsql);
          $sotrang = ceil($id / $sohang);
          return $sotrang;
      }
      function load_khachhang_chitiet($idkh){
        $sql ="SELECT * FROM `taikhoan` WHERE id = '$idkh'";
        $kqsql =pdo_query_one($sql);
        //echo $sql;
        return $kqsql;
      }
      function delete_taikhoan_dachon($del){
        $sql = "DELETE FROM `taikhoan` WHERE id in ";
        $sql.= "('".implode("','",array_values($del))."')";
        pdo_execute($sql);
      }
      
    function dangky_taikhoan($user,$pass,$email){
        $sql = "INSERT INTO `taikhoan`(`user`, `pass`, `email`) VALUES ('$user','$pass','$email')";
       // echo $sql;
        pdo_execute($sql);  
    }
    
    function checkuser($user,$pass){
        $sql = "SELECT * FROM `taikhoan` WHERE user = '".$user."' AND pass = '".$pass."'";  
        $taikhoan = pdo_query_one($sql); 
        return $taikhoan; 
        // if ($taikhoan != false) {
        //     $_SESSION['user'] = $user;
        // }else{
        //     return 'thông tin tài khoản sai';
        // }
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql = "UPDATE `taikhoan` SET `user`='$user',`pass`='$pass',`email`='$email'";
        if ($address!="") {
            $sql.=",`address`='$address'";
        }
        if ($tel!="") {
            $sql.=",`tel`='$tel'";
        }
        $sql.=" WHERE id = ".$id;
        pdo_execute($sql);
    }
    function update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role){
        $sql = "UPDATE `taikhoan` SET `user`='$user',`pass`='$pass',`email`='$email'";
        if ($address!="") {
            $sql.=",`address`='$address'";
        }
        if ($tel!="") {
            $sql.=",`tel`='$tel'";
        }
        if ($role!="") {
            $sql.=",`role`='$role'";
        }
        $sql.=" WHERE id = ".$id;
        pdo_execute($sql);
    }

    function dangxuat(){
        if (isset($_SESSION['user'])) {
            session_destroy();
            session_unset();
        }
    }

    function guiMail($email){
        $sql = "SELECT * FROM `taikhoan` WHERE email = '$email'";
        $taikhoan = pdo_query_one($sql);
        if ($taikhoan!= false) {
            guiMailMK($email,$taikhoan['user'],$taikhoan['pass']);
            return 'gửi mai thành công';
        }else{
            return 'email không tồn tại';
        }
    }

    function guiMailMK($email,$user,$pass){
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'dophuonguy1209@gmail.com';                     //SMTP username
        $mail->Password   = 'kkwrebavturiyddm';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;
        $mail->CharSet = "UTF-8";

                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('dophuonguy1209@gmail.com', 'mobile');
        $mail->addAddress($email,$user);     //Add a recipient
        //$mail->addAddress('nguyenthanhduy12012004@gmail.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Người dùng quên mật khẩu';
        $mail->Body    = 'Mật khẩu của bạn là'.$pass;
        // $mail->AltBody = '';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    }
    
?>