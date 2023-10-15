<?php
session_start();
include "pdo.php";
include "../act-admin/loaisp.php";

$ten_lsp = trim($_POST['loaisp']) ?? " ";
$trangthai_lsp = trim($_POST['trangthai']) ?? " ";

$loaisp = new loaisp();
try {
    if (empty($ten_lsp) || empty($trangthai_lsp)) {
        $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
        include "../frontend/them_loaisp.php";
    } else {
        unset($_SESSION['messages']);
        $result = $loaisp->add($ten_lsp, $trangthai_lsp);
        if ($result) {
            header("Location: ../frontend/danhsach_loaisp.php");
        } else {
            header("Location: ../frontend/them_loaisp.php");
        }
    }
}catch (PDOException $e) {
    die("Loi");
}