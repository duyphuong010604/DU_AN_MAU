<?php
class user_dk{
    var $id = null;
    var $username = null;
    var $password = null;
    var $email = null;
    var $ho = null;
    var $ten = null;
    var $sdt = null;
    var $trangthai = null;
    var $diachi = null;
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

    public function id_kh(){
        $db = new connect();
        $sql = "SELECT id_kh FROM `khachhang` ORDER by id_kh DESC LIMIT 1";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function userid($username, $password)
    {
        $db = new connect();
        $select = "select id_kh from khachhang where username='$username' and password='$password'";
        $result = $db->pdo_query_one($select);
        return $result;
    }
}