<?php
class loaisp
{
    //khai bao thuoc tinh
    var $id = null;
    var $name = null;
    var $note = null;

    public function get_list_loai($id){
        $db = new connect();
        $sql = "SELECT * FROM sanpham SP INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp WHERE LSP.trangthai not like 'Ẩn' and sp.trangthai not like 'Ẩn' and LSP.id_lsp = $id  ";
        $result = $db->pdo_query($sql);
        return $result;
    }
    
    public function get_list(){
        $db = new connect();
        $sql = "SELECT  id_lsp,ten FROM loaisanpham WHERE trangthai not like 'Ẩn'";
        $result = $db->pdo_query($sql);
        return $result;
    }
}