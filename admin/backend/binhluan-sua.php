<?php
session_start();
include "pdo.php";
include "../act-admin/binhluan.php";
include "../act-admin/chitietbl.php";

$binhluan = new binhluan();
$chitietbl = new chitiet_bl();
if (isset($_POST['luu'])) {
    $id_kh = $_POST['id_kh'] ?? "";
    $id_bl = $_POST['id_bl'] ?? "";
    $id_sp = $_POST['id_sp'] ?? '';
    $trangthai_bl = $_POST['trangthai_bl'] ?? '';
    $noidung_bl = $_POST['noidung_bl'] ?? '';
    $traloi = $_POST['traloi'] ?? '';
    $id_kh = $_POST['id_kh'] ?? '';
    
    if ($noidung_bl == '' || $trangthai_bl == '' || $id_bl == '' || $id_sp == '') {
        $_SESSION['message'] = "Bạn vui lòng nhập đầy đủ thông tin cần thiết";
        echo "thieu";
    } else {
        echo $noidung_bl.$traloi.$id_bl.$id_kh.$id_sp;
        $result = $binhluan->update($id_bl, $noidung_bl, $trangthai_bl, $id_sp);
        $result_ctbl = $chitietbl->update($id_bl,$id_kh,$traloi);
        if ($result && $result_ctbl) {
            header("Location: ../frontend/danhsach_binhluan.php");
        } else {
            echo "thatbai";
        }
    }
}
