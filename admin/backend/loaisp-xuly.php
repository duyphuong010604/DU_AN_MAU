<?php
session_start();
include "pdo.php";
include "../act-admin/loaisp.php";

$ten_lsp = $_POST['loaisp'] ?? "";
$trangthai_lsp = $_POST['trangthai'] ?? "";

$loaisp = new loaisp();

if($ten_lsp == "" || $trangthai_lsp == "" ){
    
    $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
}else{
    $result = $loaisp->add($ten_lsp,$trangthai_lsp);
    if($result){
        header("Location: ../frontend/danhsach_loaisp.php"); 
    }else{
        header("Location: ../frontend/them_loaisp.php");
    }
}

