<?php
session_start();
include "pdo.php";
include "../act-admin/binhluan.php";

$binhluan = new binhluan();
if (isset($_POST['luu'])) {
    $id_bl = $_POST['id_bl'] ?? "";
    $id_sp = $_POST['id_sp'] ?? '';
    $trangthai_bl = $_POST['trangthai_bl'] ?? '';
    $noidung_bl = $_POST['noidung_bl'] ?? '';
    echo "$id_bl
    $id_sp
    $trangthai_bl
    $noidung_bl";
    if ($noidung_bl == '' || $trangthai_bl == '' || $id_bl == '' || $id_sp == '') {
        echo "thieu";
    } else {
        echo "tới luôn: $id_bl
    $id_sp
    $trangthai_bl
    $noidung_bl";
        $result = $binhluan->update($id_bl, $noidung_bl, $trangthai_bl, $id_sp);
        if ($result) {
            header("Location: ../frontend/danhsach_binhluan.php");
        } else {
            echo "thatbai";
        }
    }
}
