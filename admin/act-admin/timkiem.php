<?php

class timkiem{
    var $loaisp = null;
    var $sanpham = null;
    var $khachhang = null;
    var $binhluan = null;
    public function timkiem_loai($loaisp){
        $db = new connect();
        $sql = "SELECT * FROM loaisanpham WHERE ten LIKE '%$loaisp%' ORDER BY id_lsp";
        $result = $db -> pdo_query($sql);
        return $result;
    }

    public function timkiem_sanpham($sanpham){
        $db = new connect();
        $sql = "SELECT * FROM sanpham WHERE ten LIKE '%$sanpham%' ORDER BY id_lsp";
        $result = $db -> pdo_query($sql);
        return $result;
    }

    public function timkiem_khachhang($khachhang){
        $db = new connect();
        $sql = "SELECT * FROM khachhang WHERE username LIKE '%$khachhang%' ORDER BY id_kh";
        $result = $db -> pdo_query($sql);
        return $result;
    }

    public function timkiem_binhluan($binhluan){
        $db = new connect();
        $sql = "SELECT * FROM binhluan WHERE noidung_bl LIKE '%$binhluan%' ORDER BY id_lsp";
        $result = $db -> pdo_query($sql);
        return $result;
    }

    
}