<?php
session_start();
include "pdo.php";
include "../act-admin/admin.php";
$username = $_POST['username'] ?? "";
$password = $_POST['password'] ?? "";
$admin = new Admin();
if ($username == "" || $password == "") {

    $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
    
   
} else {
    if ($admin->checkUser($username, $password)) {
        $result = $admin->userid($username, $password);
        $_SESSION['admin'] = $username;
        header("Location: ../frontend/index.php");            
    }
    else{
        header("Location: ../frontend/login.php");

    }
}
?>