<?php
class User
{
    var $Id = null;
    var $Username = null;
    var $Password = null;
    var $FullName = null;
    var $Email = null;
    var $Anh = null;
    var $Address = null;
    var $Phone = null;
    var $Permissions = null;


    function getUser()
    {
        $db = new connect();
        $select = "select * from users";
        return $db->pdo_query($select);
    }
    public function checkUser($username, $password)
    {
        $db = new connect();
        $select = "select * from users where UserName='$username' and Password='$password'";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }

    public function userid($username, $password)
    {
        $db = new connect();
        $select = "select UserID from users where UserName='$username' and Password='$password'";
        $result = $db->pdo_query_one($select);
        return $result;
    }
}
