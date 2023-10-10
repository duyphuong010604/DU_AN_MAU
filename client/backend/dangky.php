<?php
include "pdo.php";
include "../atc-user/dangky.php";

$user_dk = new user_dk();
if(isset($_POST['dangky'])){
    $username = $_POST['username']??'';
    $sdt = $_POST['sdt']??'';
    $password = $_POST['password']??'';
    $trangthai = "Cho phép";

    if($username==''||$password==''||$sdt==''){
        echo $username.$password.$sdt;
        $_SESSION['message'] = 'Bạn cần điền đầy đủ thông tin';
    }else{
        $result = $user_dk->add($username,$password,null,null,null,$sdt,$trangthai,null);
        $list = $user_dk->userid($username,$password);
        if($result){
            $_SESSION['user'] = $username;
            $_SESSION['id_kh'] = $list['id_kh'];
            header("Location: ../frontend/index.php"); 
        }else{
            header("Location: ../frontend/dangky.php");
    
        }
    }
}
