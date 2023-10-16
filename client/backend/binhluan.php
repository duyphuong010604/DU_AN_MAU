<?php
session_start();
include "pdo.php";
include "../atc-user/binhluan.php";
include "../atc-user/chitietbl.php";

$binhluan = new binhluan();
$chitietbl = new chitiet_bl();

if(isset($_POST['them'])){
    echo $_POST['noidung_bl']." ".$_SESSION['id_sp']." ".$_SESSION['id_kh'] ." ".$trangthai = "Hiển thị";
    $noidung_bl = $_POST['noidung_bl']??"";
    $id_sp = $_SESSION['id_sp'] ?? "";
    $id_kh = $_SESSION['id_kh'] ?? "";
    $trangthai = "Hiển thị";
    
    if($id_kh == '' || $noidung_bl == '' || $id_sp == ''){
        $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
        include "../frontend/products_detail.php";
    }else{
        unset($_SESSION['messages']);
        $result = $binhluan->add($noidung_bl,$trangthai,$id_sp);

        if ($result) {
            
            $chuoi_id = $chitietbl->id_bl();
            $id_bl = $chuoi_id[0]['id_bl'];
            $napchitiet = $chitietbl->add($id_bl, $id_kh, null);
            if($napchitiet){
                header("Location: ../frontend/products_detail.php?id_sp=$id_sp");
            }else{
                header("Location: ../frontend/products_detail.php?id_sp=$id_sp");
            }
            
        } else {
            header("Location: ../frontend/products_detail.php?id_sp=$id_sp");
        }
    }
}