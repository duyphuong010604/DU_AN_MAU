<?php
session_start();
include "pdo.php";
include "../atc-user/user.php";

$khachhang = new khachhang();

try {
    if (isset($_POST['luu'])) {
        $ho = trim($_POST['ho']) ?? ' ';
        $ten = trim($_POST['ten']) ?? ' ';
        $email = trim($_POST['email']) ?? ' ';
        $diachi = trim($_POST['diachi']) ?? ' ';
        $sdt = trim($_POST['sdt']) ?? ' ';
        $id_kh = trim($_POST['id_kh']) ?? ' ';

        $result = $khachhang->update($id_kh, $email, $ho, $ten, $sdt, $diachi);
        if ($result) {
            header("Location: ../frontend/taikhoan.php");
        } else {
            header("Location: ../frontend/taikhoan.php");
        }
    }

    if (isset($_POST['thaydoi'])) {
        $username = $_SESSION['user'];
        $id_kh = $_SESSION['id_kh'];
        $password = trim($_POST['password']) ?? " ";
        $password_new = trim($_POST['password_new']) ?? " ";

        echo "thaydoi: " . $password . $username . $id_kh . "<br/>";


        $thaydoi = $khachhang->check_password($username, $password);
        if ($thaydoi) {
            unset($_SESSION['saimatkhau']);

            if ($thaydoi['password'] == $password) {
                $result = $khachhang->update_password($id_kh, $password_new);
                if ($result) {
                    header("Location: ../frontend/taikhoan.php");
                } else {
                    header("Location: ../frontend/taikhoan.php");
                }
            }
        } else {

            $_SESSION['saimatkhau'] = "Vui lòng nhập đúng mật khẩu cũ của tài khoản";
            header("Location: ../frontend/taikhoan.php");
        }


    }
} catch (PDOException $e) {
    die("Error");
}