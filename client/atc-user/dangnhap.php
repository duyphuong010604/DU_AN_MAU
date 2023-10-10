<?php
class user {
    var $username = null;
    var $password = null;

  
    public function checkUser($username, $password)
    {
        $db = new connect();
        $select = "select * from khachhang where username='$username' and password='$password'";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }

    public function userid($username, $password)
    {
        $db = new connect();
        $select = "select id_kh from khachhang where username='$username' and password='$password'";
        $result = $db->pdo_query_one($select);
        return $result;
    }

    
    
}