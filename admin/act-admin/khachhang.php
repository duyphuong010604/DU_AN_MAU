<?php
class khachhang
{
    var $id = null;
    var $username = null;
    var $password = null;
    var $email = null;
    var $ho = null;
    var $ten = null;
    var $sdt = null;
    var $trangthai = null;
    var $diachi = null;


    public function get_list(){
        $db = new connect();
        $sql = "SELECT * FROM khachhang";
        $result = $db->pdo_query($sql);
        return $result;

    }

    public function add($username, $password, $email, $ho, $ten, $sdt, $trangthai, $diachi){
        $db = new connect();
        $sql = "INSERT INTO `khachhang`(`username`, `password`, `email`, `ho`, `ten`, `sdt`, `diachi`, `trangthai`) VALUES ('$username','$password','$email','$ho','$ten','$sdt','$diachi','$trangthai')";
        $result = $db->pdo_execute($sql);
        return $result;
    }

 

    public function update($id,$username, $password, $email, $ho, $ten, $sdt, $trangthai, $diachi){
        $db=new connect();
        $sql = "UPDATE `khachhang` SET `username`='$username',`password`='$password',`email`='$email',`ho`='$ho',`ten`='$ten',`sdt`='$sdt',`diachi`='$diachi',`trangthai`='$trangthai' WHERE id_kh = '$id'";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function getById($id){
        $db = new connect();
        $sql = "SELECT * FROM khachhang WHERE id_kh = $id ";
        $result = $db->pdo_query_one($sql);
        return $result;
        
    }

    public function delete($id){
        $db = new connect();
        $sql = "DELETE FROM khachhang WHERE id_kh = $id ";
        $retult = $db->pdo_execute($sql);
        return $retult;
    }



}