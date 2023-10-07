<?php
class thongke {
    var $name = null;

    public function dem($name){
        $db = new connect();
        $sql ="SELECT COUNT(*) as Tong FROM $name";
        $result = $db->pdo_query($sql);
        return $result;
    }
}