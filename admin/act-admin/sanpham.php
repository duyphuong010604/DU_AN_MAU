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


    public function get_list(){
        $db = new connect();
        $sql = "SELECT * FROM sanpham";
        $result = $db->pdo_query($sql);
        return $result;

    }

    public function get_giatb(){
        $db = new connect();
        $sql = "SELECT ROUND(SUM(gia)/COUNT(id_sp),0) FROM `sanpham` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function get_giamin(){
        $db = new connect();
        $sql = "SELECT MIN(gia) FROM `sanpham` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function get_giamax(){
        $db = new connect();
        $sql = "SELECT MAX(gia) FROM `sanpham` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function add( $ten, $hinhanh, $mausac,$gia,$trangthai,$id_lsp,$size,$mota){
        $db = new connect();
        $sql = "INSERT INTO sanpham(ten, hinhanh, mausac, gia,trangthai,id_lsp,mota,size) VALUES ('$ten','$hinhanh','$mausac','$gia','$trangthai',$id_lsp,'$mota','$size')";
        $result = $db->pdo_execute($sql);
        return $result;
    }

 

    public function update($id,$ten, $hinhanh,$mausac,$gia,$trangthai,$id_lsp,$size,$mota){
        $db=new connect();
        $sql = "UPDATE `sanpham` SET `ten`='$ten',`hinhanh`='$hinhanh',`mausac`='$mausac',`size`='$size',`gia`='$gia',`mota`='$mota',`trangthai`='$trangthai',`id_lsp`='$id_lsp'  Where id_sp=$id";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function getById($id){
        $db = new connect();
        $sql = "SELECT * FROM sanpham WHERE id_sp = $id ";
        $result = $db->pdo_query_one($sql);
        return $result;
        
    }

    public function delete($id){
        $db = new connect();
        $sql = "DELETE FROM sanpham WHERE id_sp = $id ";
        $retult = $db->pdo_execute($sql);
        return $retult;
    }



}