<?php
session_start();
include "pdo.php";
include "../atc-user/user.php";

$khachhang = new khachhang();


if (isset($_POST['luu'])) {
    $ho = $_POST['ho'] ?? '';
    $ten = $_POST['ten'] ?? '';
    $email = $_POST['email'] ?? '';
    $diachi = $_POST['diachi'] ?? '';
    $sdt = $_POST['sdt'] ?? '';
    $id_kh = $_POST['id_kh'] ?? '';

    $result = $khachhang->update($id_kh, $email, $ho, $ten, $sdt, $diachi);
    if ($result) {
        header("Location: ../frontend/taikhoan.php");
    } else {
        header("Location: ../frontend/taikhoan.php");
    }
}

if (isset($_POST['thaydoi'])) {
    $username = $_SESSION['user'] ;
    $id_kh = $_SESSION['id_kh'] ;
    $password = $_POST['password'] ?? "";
    $password_new = $_POST['password_new'] ?? "";
    $thaydoi = $khachhang->check_password( $username,$password);
    // echo "thaydoi: " . $password.$username.$id_kh;
    // echo $thaydoi['password'];
    if($thaydoi['password'] == $password){
        $result = $khachhang->update_password($id_kh,$password_new);
        if ($result) {
            header("Location: ../frontend/taikhoan.php");
        } else {
            header("Location: ../frontend/taikhoan.php");
        }
    }


    


}