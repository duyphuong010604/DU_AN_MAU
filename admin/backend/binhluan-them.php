<?php
session_start();
include "pdo.php";
include "../act-admin/binhluan.php";
include "../act-admin/chitietbl.php";
$binhluan = new binhluan();
$chitietbl = new chitiet_bl();


try {
    if (isset($_POST['them'])) {
        $id_sp = trim($_POST['id_sp']) ?? ' ';
        $id_kh = trim($_POST['id_kh']) ?? ' ';
        $trangthai_bl = trim($_POST['trangthai_bl']) ?? ' ';
        $noidung_bl = trim($_POST['noidung_bl']) ?? ' ';
        if (empty($id_sp) || empty($id_kh) || empty($noidung_bl) || empty($trangthai_bl)) {
            $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
            include "../frontend/them_binhluan.php";
        } else {
            unset($_SESSION['messages']);

            $result = $binhluan->add($noidung_bl, $trangthai_bl, $id_sp);

            if ($result) {
                $rows = $binhluan->get_list();
                $chuoi_id = $chitietbl->id_bl();
                $id_bl = $chuoi_id[0]['id_bl'];
                // echo $id_bl.$id_kh;
                $napchitiet = $chitietbl->add($id_bl, $id_kh, null);
                if ($napchitiet) {
                    header("Location: ../frontend/danhsach_binhluan.php");

                } else {
                    header("Location: ../../error/404.html");
                }

            } else {
                header("Location: ../../error/404.html");
            }
        }
    }
} catch (PDOException $e) {
    header("Location: ../../error/500.html");
}