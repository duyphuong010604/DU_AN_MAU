<?php

include "pdo.php";
include "../act-admin/khachhang.php";
$khachhang = new khachhang();
if(isset($_POST['luu'])){
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $ho = $_POST['ho'] ?? '';
    $ten = $_POST['ten'] ?? '';
    $email = $_POST['email'] ?? '';
    $diachi = $_POST['diachi'] ?? '';
    $sdt = $_POST['sdt'] ?? '';
    $trangthai = $_POST['trangthai'] ?? '';
    $id_kh = $_POST['id_kh'] ?? '';

    if (
        $username == '' || $password == '' || $ho == '' || $ten == '' || $email == '' || $diachi == '' || $sdt == '' || $trangthai == '' || $id_kh ==''
    ){
        echo $username .
        $password .
        $ho .
        $ten .
        $email .
        $diachi .
        $sdt .
        $trangthai.
        $id_kh;
        $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
    }else{
        $result = $khachhang->update($id_kh,$username, $password, $email, $ho, $ten, $sdt, $trangthai, $diachi);
        if($result){
            header("Location: ../frontend/danhsach_taikhoannguoidung.php"); 
        }else{
            header("Location: ../frontend/sua_tk.php");
        }
    }


}