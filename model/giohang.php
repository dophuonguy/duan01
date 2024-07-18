<?php 
    function tongdonhang()
    {
        $tong = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien = $cart[4] * $cart[5];
            $tong += $ttien;
            //var_dump($_SESSION['mycart']);
        }
        return $tong;
    }


    function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
        $sql = "INSERT INTO `bill`(`iduser`,`bill_name`, `bill_address`, `bill_tel`, `bill_email`,`bill_pttt`, `total`, `ngaydathang`) VALUES ('$iduser','$name','$address','$tel','$email','$pttt','$tongdonhang','$ngaydathang')";
        return pdo_execute_return_lastInsertID($sql);
    }

    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql = "INSERT INTO `cart`(`iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($id){
        $sql = "SELECT * FROM `bill` WHERE id = ".$id;
        $bil = pdo_query_one($sql);
        return $bil; 
    }
    function loadall_cart($id){
        $sql = "SELECT * FROM `cart` WHERE idbill = ".$id;
        $listbil = pdo_query($sql);
        return $listbil; 
    }
    function loadall_cart_count($id){
        $sql = "SELECT * FROM `cart` WHERE idbill = ".$id;
        $listbil = pdo_query($sql);
        return sizeof($listbil); 
    }

    function load_bill_chitiet($idbill){
        $sql= "SELECT * FROM `bill` WHERE id =". $idbill ;
        $kqsql =pdo_query_one($sql);
        //echo $sql;
        return $kqsql;
    }

    function load_bill_donhang_one($img){
        $sql = "SELECT * FROM `cart` WHERE img= ". $img;
        $kqsql = pdo_query_one($sql);
        return $kqsql;
    }
    function loadall_bill($iduser,$kyw=''){
        $sql = "SELECT * FROM `bill` WHERE 1 ";
        if($iduser>0){
            $sql .= " AND iduser = ".$iduser;
        }
        if($kyw!=''){
            $sql .= " AND id LIKE '%".$kyw."%'";
        }
        $sql .= " ORDER BY id DESC ";
        $listbill = pdo_query($sql);
        return $listbill; 
    }
    
    function load_sp_hd($id){
        $sql = "SELECT * FROM `cart` WHERE idbill=". $id;
        $kqsql =pdo_query($sql);
        return $kqsql;
    }
    function load_bill_edit($id){
        $sql = "SELECT * FROM `bill` WHERE id =".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    function update_bill($id,$ttdh){
        $sql = "UPDATE `bill` SET `bill_status`='$ttdh' WHERE id = ".$id;
        pdo_execute($sql);
    }
    function get_ttdh($n){
        $tt ="";
        switch ($n) {
            case '0':
                $tt = "đơn hàng mới";
                break;
            case '1':
                $tt = "đang xử lý";
                break;
            case '2':
                $tt = "đang giao hàng";
                break;
            case '3':
                $tt = "Hoàn tất";
                break;
            default:
            //$tt = "đơn hàng mới";
                break;
        }
        return $tt;
    }

    

    function load_bill_pttt($pttt){
        $sql = "SELECT * FROM `bill` WHERE bill_pttt =".$pttt;
        $kqsql = pdo_query($sql);
        return $kqsql;
    }
    function delete_donhang_dachon($del){
        $sql = "DELETE FROM `cart` WHERE idbill in ";
        $sql.= "('".implode("','",array_values($del))."')";
        pdo_execute($sql);
        $sql = "DELETE FROM `bill` WHERE id in ";
        $sql.= "('".implode("','",array_values($del))."')";
        pdo_execute($sql);
    }
    function loadall_thongke(){
        $sql = "";
        $kqsql = pdo_query($sql);
        return $kqsql;
    }

?>