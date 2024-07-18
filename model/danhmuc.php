<?php 
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id DESC ";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function load_ten_dm ($iddm){
        if ($iddm>0) {
            $sql = "SELECT * FROM danhmuc where id =".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
        }else{
            return '';
        }
    }

    function add_danhmuc_sp($TenDMSP,$imgdm){
        $sql = "INSERT INTO `danhmuc`(`name`,`img_dm`) VALUES ('$TenDMSP','$imgdm')";
        pdo_execute($sql);
    }
    function delete_danhmuc_dachon($del){
        $sql = "DELETE FROM `danhmuc` WHERE id in ";
        $sql.= "('".implode("','",array_values($del))."')";
        pdo_execute($sql);
    }

    function loadall_danhmuc_phantrang($starpgae,$sohang){
        $sql = "SELECT * FROM `danhmuc` ORDER BY id DESC LIMIT $starpgae,$sohang";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function sotrang_dm($sohang){
        $sql ="SELECT COUNT(id) AS'id' FROM danhmuc";
        $kqsql = pdo_query_one($sql);
        extract($kqsql);
        $sotrang = ceil($id / $sohang);
        return $sotrang;
    }

    function starpage($page,$sohang){
        $starpgae = ($page - 1) * $sohang;
        return $starpgae;
    }

    function load_danhmuc($iddm){
        $sql = 'SELECT * FROM `danhmuc` WHERE id = '.$iddm;
        $kqsql  = pdo_query_one($sql);
        return $kqsql;
    }

    function update_danhmuc($iddm,$tendm,$imgdm){
        if ($imgdm!="") {
            $sql = "UPDATE `danhmuc` SET `name`='$tendm',`img_dm`='$imgdm' WHERE id = ".$iddm;
          }else{
            $sql = "UPDATE `danhmuc` SET `name`='$tendm' WHERE id = ".$iddm;
          }
        pdo_execute($sql);
    }


?>