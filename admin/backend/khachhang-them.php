<?php
session_start();
include "pdo.php";
include "../act-admin/khachhang.php";
$khachhang = new khachhang();

if (isset($_POST['them'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $ho = $_POST['ho'] ?? '';
    $ten = $_POST['ten'] ?? '';
    $email = $_POST['email'] ?? '';
    $diachi = $_POST['diachi'] ?? '';
    $sdt = $_POST['sdt'] ?? '';
    $trangthai = $_POST['trangthai'] ?? '';

    
    if (
        $username == '' || $password == '' || $ho == '' || $ten == '' || $email == '' || $diachi == '' || $sdt == '' || $trangthai == ''
    ) {
        
        $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
        include "../frontend/them_taikhoannguoidung.php";
    }else{
        unset($_SESSION['messages']);
        $result = $khachhang->add($username, $password, $email, $ho, $ten, $sdt, $trangthai, $diachi);
        if($result){
            header("Location: ../frontend/danhsach_taikhoannguoidung.php"); 
        }else{
            header("Location: ../frontend/them_taikhoannguoidung.php");
        }
    }
}
