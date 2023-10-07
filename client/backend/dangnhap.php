<?php
include "pdo.php";
include "../atc-user/dangnhap.php";

$user = new User();

if(isset($_POST['dangnhap'])){
    $username = $_POST['username']??'';
    $password = $_POST['password']??'';

    if($username==''||$password==''){
        echo $username. $password;
        $_SESSION['message']="Bạn vui lòng điền đầy đủ thông tin";
    }else{
        if ($user->checkUser($username, $password)) {
            $result = $user->userid($username, $password);
            $_SESSION['user'] = $username;
            header("Location: ../frontend/index.php");            
        }
        else{
            header("Location: ../frontend/dangnhap.php");
    
        }

    }
}
