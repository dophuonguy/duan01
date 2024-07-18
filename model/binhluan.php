<?php 
    function load_binhluan($idsp){
        $sql = "SELECT binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user FROM `binhluan` 
        LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id 
        LEFT JOIN sanpham ON binhluan.idpro = sanpham.id 
        WHERE sanpham.id = ".$idsp;
        $kqsql = pdo_query($sql);
       
        return $kqsql;
    }

    function load_soluot_binhluan(){
        $sql ="SELECT sanpham.id,sanpham.name,COUNT(binhluan.idpro)'soluotbl' FROM `binhluan` JOIN sanpham ON binhluan.idpro = sanpham.id 
        WHERE 1 
        GROUP BY binhluan.idpro";
        $kqsql = pdo_query($sql);
        return $kqsql;
    }
    function delete_binhluan_dachon($del){
        $sql = "DELETE FROM `binhluan` WHERE id in ";
        $sql.= "('".implode("','",array_values($del))."')";
        pdo_execute($sql);
      }
    function loadall_binhluan_phantrang($starpgae,$sohang,$idsp){
        $sql = "SELECT binhluan.id,binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user FROM `binhluan` 
        LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id 
        LEFT JOIN sanpham ON binhluan.idpro = sanpham.id 
        WHERE sanpham.id = '".$idsp."'";
        $sql.=" ORDER BY binhluan.iduser DESC LIMIT $starpgae,$sohang";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
      }
      function sotrang_binhbuan($sohang,$idsp){
          $sql ="SELECT COUNT(binhluan.id)'id' FROM `binhluan` 
          LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id 
          LEFT JOIN sanpham ON binhluan.idpro = sanpham.id 
          WHERE sanpham.id = ".$idsp." GROUP BY sanpham.id";
          $kqsql = pdo_query_one($sql);
          extract($kqsql);
          $sotrang = ceil($id / $sohang);
          return $sotrang;
      }
    
    function insert_binhluan($noidung,$iduser,$idpro,$date){
        $sql = "INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES ('$noidung','$iduser','$idpro','$date')";
        pdo_execute($sql);
    }
    
?>