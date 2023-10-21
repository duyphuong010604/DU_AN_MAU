<?php
class sanpham
{
    var $id = null;
    var $ten = null;
    var $hinhanh = null;
    var $mausac = null;
    var $size = null;
    var $mota = null;
    var $gia = null;
    var $trangthai = null;
    var $id_lsp = null;


    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT * FROM sanpham where trangthai not like 'Ẩn'";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($id){
        $db = new connect();
        $sql = "SELECT * FROM sanpham WHERE id_sp = $id ";
        $result = $db->pdo_query_one($sql);
        return $result;
        
    }

    public function get_list_min()
    {
        $db = new connect();
        $sql = "SELECT * FROM `sanpham` where trangthai not like 'Ẩn' ORDER BY gia";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function get_list_max()
    {
        $db = new connect();
        $sql = "SELECT * FROM `sanpham` where trangthai not like 'Ẩn' ORDER BY gia DESC";
        $result = $db->pdo_query($sql);
        return $result;
    }

}
