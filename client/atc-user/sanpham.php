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
        $sql = "SELECT * FROM sanpham";
        $result = $db->pdo_query($sql);
        return $result;
    }
}
