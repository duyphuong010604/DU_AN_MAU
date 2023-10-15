<?php
session_start();
include "pdo.php";
include "../act-admin/khachhang.php";
$khachhang = new khachhang();

if (isset($_POST['them'])) {
    $username = trim($_POST['username']) ?? ' ';
    $password = trim($_POST['password']) ?? ' ';
    $ho = trim($_POST['ho']) ?? ' ';
    $ten = trim($_POST['ten']) ?? ' ';
    $email = trim($_POST['email']) ?? ' ';
    $diachi = trim($_POST['diachi']) ?? ' ';
    $sdt = trim($_POST['sdt']) ?? ' ';
    $trangthai = trim($_POST['trangthai']) ?? ' ';

    try {
        if (
            empty($username) || empty($password) || empty($ho) || empty($ten) || empty($email) || empty($diachi) || empty($sdt) || empty($trangthai)
            // $username ==  ' ' || $password ==  ' ' || $ho ==  ' ' || $ten ==  ' ' || $email ==  ' ' || $diachi ==  ' ' || $sdt ==  ' ' || $trangthai ==  ' '
        ) {
            $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
            include "../frontend/them_taikhoannguoidung.php";
        } else {
            unset($_SESSION['messages']);
            $result = $khachhang->add($username, $password, $email, $ho, $ten, $sdt, $trangthai, $diachi);
            if ($result) {
                header("Location: ../frontend/danhsach_taikhoannguoidung.php");
            } else {
                header("Location: ../frontend/them_taikhoannguoidung.php");
            }
        }
    } catch (PDOException $e) {
        die("Lỗi : " ) ;
    }

}