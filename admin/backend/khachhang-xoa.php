<?php
session_start();
include "pdo.php";
include "../act-admin/khachhang.php";
$khachhang = new khachhang();

if ($_GET['id_kh']) {
    try {
        $id_kh = $_GET['id_kh'];
        $result = $khachhang->delete($id_kh);
        if ($result) {
            header("Location:../frontend/danhsach_taikhoannguoidung.php");
        } else {
            echo "that bai";
        }
    } catch (PDOException $e) {
        die("Lỗi!");
    }

}