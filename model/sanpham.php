<?php 
    // hiển thị 9 sản phẩm mới nhất
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY id LIMIT 0,9;";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

  // hiển thị top 10 sản phẩm có lượt xem cao nhất 
  function loadall_sanpham_top10(){
    $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY luotxem DESC LIMIT 0,10;";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
  }

  function load_chitiet_sanpham($idsp){
    $sql = "SELECT * FROM `sanpham` WHERE id = '$idsp'";
    $kqsql = pdo_query_one($sql);
    return $kqsql;
  }
  function loadsp_cungloai($idsp,$iddm){
    $sql = "SELECT * FROM `sanpham` WHERE iddm = $iddm AND id <> $idsp LIMIT 0,4 ";
    $spcl = pdo_query($sql);
    return $spcl;
  }

  function load_sanpham_theo_danhmuc($iddm=0,$kyw=""){
    $sql = "SELECT * FROM `sanpham` WHERE 1";
    if ($kyw!='') {
      $sql.=" AND name LIKE '%".$kyw."%'";
    }
    if($iddm>0){
      $sql.=" AND iddm = '".$iddm."'";
    }
    $kqsql = pdo_query($sql);
    return $kqsql;
  }

  function add_sanpham($tensp,$gia,$mota,$iddm){
    $sql ="INSERT INTO `sanpham`( `name`, `price`, `mota`,  `iddm`) VALUES ('$tensp','$gia','$mota','$iddm')";
    //echo $sql;
    return pdo_execute_return_lastInsertID($sql);
  }
  function add_anh($id_sp,$ten_anh){
    $sql = "INSERT INTO `anh`(`id_sanpham`, `url_anh`) VALUES ('$id_sp','$ten_anh')";
   // echo $sql;
    pdo_execute($sql);
  }

 
  function loadall_sanpham_phantrang($starpgae,$sohang,$iddm,$kyw){
    $sql = "SELECT * FROM `sanpham`";
    if ($iddm==0) {
      $sql.= " WHERE 1";
    }else {
      $sql.= " WHERE iddm = '$iddm'";
    }
    if ($kyw!="") {
      $sql.= " AND name LIKE '%".$kyw."%'";
    }
    
    $sql.=" ORDER BY id LIMIT $starpgae,$sohang";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
  }
  function sotrang_sp($sohang,$iddm,$kyw){
      $sql ="SELECT COUNT(id) AS'id' FROM sanpham";
      if ($iddm==0) {
        $sql.= " WHERE 1";
      }else {
        $sql.= " WHERE iddm = '$iddm'";
      }
      if ($kyw!="") {
        $sql.= " AND name LIKE '%".$kyw."%'";
      }
      $kqsql = pdo_query_one($sql);
      extract($kqsql);
      $sotrang = ceil($id / $sohang);
      return $sotrang;
  }


  function delete_sanpham_dachon($del){
    $sql = "DELETE FROM `sanpham` WHERE id in ";
    $sql.= "('".implode("','",array_values($del))."')";
    pdo_execute($sql);
  }

  function load_sanpham_edit($edit){
    $sql = "SELECT sanpham.id,sanpham.name,sanpham.price,sanpham.mota,sanpham.iddm,danhmuc.name AS'namedm' FROM `sanpham` JOIN danhmuc ON sanpham.iddm = danhmuc.id where sanpham.id = '$edit'";
    $kqsql = pdo_query_one($sql);
    return $kqsql;
  }
  function load_anh($id_sp){
    $sql = "SELECT * FROM `anh` WHERE id_sanpham = '$id_sp'" ;
    //echo $sql
    $kq= pdo_query($sql);
    return $kq;
  }
  function update_sanpham($edit,$name,$price,$mota,$iddm){
    $sql = "UPDATE `sanpham` SET `name`='$name',`price`='$price',`mota`='$mota',`iddm`='$iddm' WHERE id = ".$edit;
    pdo_execute($sql);
  }
  function update_anh($id_sp,$ten_anh,$edit){
    $sql = "UPDATE `anh` SET `id_sanpham`='$id_sp',`url_anh`='$ten_anh' WHERE id_anh=" .$edit;
   // echo $sql;
  pdo_execute($sql);
  }
  
  function get_anh_san_pham_one($id){
    $sql ="SELECT * FROM `anh` WHERE id_sanpham =".$id;
   // echo $sql;
    $kq = pdo_query_one($sql);
    return $kq;
  }

  function get_anh_san_pham_all($id){
    $sql ="SELECT * FROM `anh` WHERE id_sanpham =".$id;
   // echo $sql;
    $kq = pdo_query($sql);
    return $kq;
  }
  function xoa_anh($id_anh){
      $sql = "DELETE FROM `anh` WHERE id_anh =".$id_anh;
      pdo_execute($sql);
  }

  ?> 