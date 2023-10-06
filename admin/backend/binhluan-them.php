<?php
session_start();
include "pdo.php";
include "../act-admin/binhluan.php";

$binhluan = new binhluan();

if(isset($_POST['them'])){
    $id_sp = $_POST['id_sp']??'';
    $id_kh = $_POST['id_kh']??'';
    $trangthai_bl = $_POST['trangthai_bl']??'';
    $noidung_bl = $_POST['noidung_bl']??'';
    if( $id_kh == '' || $noidung_bl == ''||$trangthai_bl==''){
        echo "thiếu";
        $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
    }else{
        $result = $binhluan->add($noidung_bl,$trangthai_bl,$id_sp);
        
        if($result){
            header("Location: ../frontend/danhsach_binhluan.php"); 
        }else{
            header("Location: ../frontend/them_binhluan.php");
        }
    }
}