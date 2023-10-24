<?php
class binhluan
{
    //khai bao thuoc tinh
    var $id = null;
    var $id_sp = null;
    var $noidung = null;
    var $trangthai = null;
    var $traloi = null;
    var $id_kh = null;


    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT  * FROM binhluan ORDER BY id_bl DESC";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($id)
    {
        $db = new connect();
        $sql = "SELECT * FROM binhluan WHERE id_bl = $id ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function add($noidung, $trangthai, $id_sp)
    {
        $db = new connect();
        $sql = "INSERT INTO binhluan (noidung_bl,trangthai_bl,id_sp) VALUES ('$noidung','$trangthai',$id_sp) ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    

    public function update($id, $noidung, $trangthai, $id_sp)
    {
        $db = new connect();
        $sql = "UPDATE binhluan SET noidung_bl='$noidung', trangthai_bl='$trangthai',id_sp=$id_sp where id_bl = $id";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($id)
    {
        $db = new connect();
        $sql = "DELETE FROM binhluan  WHERE id_bl = $id ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function chitiet($id)
    {
        $db = new connect();
        $sql = "SELECT * FROM `chitietbl` CTBL
        INNER JOIN khachhang KH ON KH.id_kh = CTBL.id_kh
        INNER JOIN binhluan BL ON BL.id_bl = CTBL.id_bl where CTBL.id_bl = $id 
        ";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function bl($id){
        $db = new connect();
        $sql = "SELECT * FROM binhluan BL
        INNER JOIN sanpham SP on SP.id_sp = BL.id_sp WHERE BL.id_bl = $id";
        $result = $db->pdo_query($sql);
        return $result;
    }
}
