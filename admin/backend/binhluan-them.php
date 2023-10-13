<?php
session_start();
include "pdo.php";
include "../act-admin/binhluan.php";
include "../act-admin/chitietbl.php";
$binhluan = new binhluan();
$chitietbl = new chitiet_bl();

if (isset($_POST['them'])) {
    $id_sp = $_POST['id_sp'] ?? '';
    $id_kh = $_POST['id_kh'] ?? '';
    $trangthai_bl = $_POST['trangthai_bl'] ?? '';
    $noidung_bl = $_POST['noidung_bl'] ?? '';
    if ($id_kh == '' || $noidung_bl == '' || $trangthai_bl == '') {
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
            if($napchitiet){
                header("Location: ../frontend/danhsach_binhluan.php");

            }else{
                header("Location: ../frontend/them_binhluan.php");
            }
            
        } else {
            header("Location: ../frontend/them_binhluan.php");
        }
    }
}
