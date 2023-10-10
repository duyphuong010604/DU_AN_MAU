<?php
class chitiet_bl
{
    //khai bao thuoc tinh
    var $id = null;
    var $id_kh = null;
    var $traloi = null;
   
    


    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT  * FROM chitietbl ";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function id_bl(){
        $db = new connect();
        $sql = "SELECT id_bl FROM `binhluan` ORDER by id_bl DESC LIMIT 1";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($id)
    {
        $db = new connect();
        $sql = "SELECT * FROM chitietbl WHERE id_bl = $id ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function add($id,$id_kh,$traloi)
    {
        $db = new connect();
        $sql = "INSERT INTO chitietbl (id_bl,id_kh,traloi) VALUES ('$id','$id_kh','$traloi') ";
        echo $sql;
        $result = $db->pdo_execute($sql);
        return $result;
    }

  


    public function update($id,$id_kh,$traloi)
    {
        $db = new connect();
        $sql = "UPDATE chitietbl SET traloi='$traloi'  where id_bl = $id and id_kh = $id_kh ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($id)
    {
        $db = new connect();
        $sql = "DELETE FROM chitietbl WHERE id_bl = $id ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function chitiet($id)
    {
        $db = new connect();
        $sql = "SELECT * FROM `chitietbl` CTBL
        INNER JOIN khachhang KH ON KH.id_kh = CTBL.id_kh
        INNER JOIN chitietbl BL ON BL.id_bl = CTBL.id_bl where CTBL.id_bl = $id 
        ";
        $result = $db->pdo_query($sql);
        return $result;
    }


}
