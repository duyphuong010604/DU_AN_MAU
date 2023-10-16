<?php

class timkiem{
    
    var $sanpham = null;
      
    public function timkiem_sp($sanpham){
        $db = new connect();
        $sql = "SELECT * FROM sanpham WHERE ten LIKE '%$sanpham%' and trangthai like 'Hiển thị' ORDER BY id_sp";
        $result = $db -> pdo_query($sql);
        return $result;
    }
}