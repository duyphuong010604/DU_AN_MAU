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
            header("Location: ../../error/404.html");
        }
    } catch (PDOException $e) {
        header("Location: ../../error/500.html");
    }

}