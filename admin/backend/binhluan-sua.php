<?php
session_start();
include "pdo.php";
include "../act-admin/binhluan.php";
include "../act-admin/chitietbl.php";

$binhluan = new binhluan();
$chitietbl = new chitiet_bl();
if (isset($_POST['luu'])) {
    $id_kh = trim($_POST['id_kh']) ?? " ";
    $id_bl = trim($_POST['id_bl']) ?? " ";
    $id_sp = trim($_POST['id_sp']) ?? ' ';
    $trangthai_bl = trim($_POST['trangthai_bl']) ?? ' ';
    $noidung_bl = trim($_POST['noidung_bl']) ?? ' ';
    $traloi = trim($_POST['traloi']) ?? ' ';
    $id_kh = trim($_POST['id_kh']) ?? ' ';
    try {
        if (empty($id_kh) || empty($id_bl) || empty($id_sp) || empty($trangthai_bl) || empty($noidung_bl)) {

            echo "trong";
        } else {
            echo $noidung_bl . $traloi . $id_bl . $id_kh . $id_sp;
            $result = $binhluan->update($id_bl, $noidung_bl, $trangthai_bl, $id_sp);
            $result_ctbl = $chitietbl->update($id_bl, $id_kh, $traloi);
            if ($result && $result_ctbl) {
                header("Location: ../frontend/danhsach_binhluan.php");
            } else {
                echo "thatbai";
            }
        }
    } catch (PDOException $e) {
        die("Error");
    }

}