<?php

include "pdo.php";
include "../act-admin/khachhang.php";
$khachhang = new khachhang();
if (isset($_POST['luu'])) {
    $username = trim($_POST['username']) ?? '';
    $password = trim($_POST['password']) ?? '';
    $ho = trim($_POST['ho']) ?? '';
    $ten = trim($_POST['ten']) ?? '';
    $email = trim($_POST['email']) ?? '';
    $diachi = trim($_POST['diachi']) ?? '';
    $sdt = trim($_POST['sdt']) ?? '';
    $trangthai = trim($_POST['trangthai']) ?? '';
    $id_kh = trim($_POST['id_kh']) ?? '';
    try {
        if (
            empty($username) || empty($password) || empty($ho) || empty($ten) || empty($email) || empty($diachi) || empty($sdt) || empty($trangthai) || empty($id_kh)
            // $username == '' || $password == '' || $ho == '' || $ten == '' || $email == '' || $diachi == '' || $sdt == '' || $trangthai == '' || $id_kh ==''
        ) {
            echo "Lỗi";
        } else {
            
            $result = $khachhang->update($id_kh, $username, $password, $email, $ho, $ten, $sdt, $trangthai, $diachi);
            if ($result) {
                header("Location: ../frontend/danhsach_taikhoannguoidung.php");
            } else {
                header("Location: ../frontend/sua_tk.php");
            }
        }
    } catch (PDOException $e) {
        die("Lỗi!");
    }



}