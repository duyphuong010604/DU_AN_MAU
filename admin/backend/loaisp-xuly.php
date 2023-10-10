<?php
session_start();
include "pdo.php";
include "../act-admin/loaisp.php";

$ten_lsp = $_POST['loaisp'] ?? "";
$trangthai_lsp = $_POST['trangthai'] ?? "";

$loaisp = new loaisp();

if($ten_lsp == "" || $trangthai_lsp == "" ){
    
    $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
    include "../frontend/them_loaisp.php";
}else{
    unset($_SESSION['messages']);
    $result = $loaisp->add($ten_lsp,$trangthai_lsp);
    if($result){
        header("Location: ../frontend/danhsach_loaisp.php"); 
    }else{
        header("Location: ../frontend/them_loaisp.php");
    }
}

