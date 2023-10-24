<?php
session_start();
include "pdo.php";
include "../atc-user/dangky.php";

$user_dk = new user_dk();
try {
    if (isset($_POST['dangky'])) {
        $username = trim($_POST['username']) ?? ' ';
        $sdt = trim($_POST['sdt']) ?? ' ';
        $password = strlen(trim($_POST['password']))<3 ? "":trim($_POST['password']);
        $trangthai = "Cho phép";

        if (empty($username) || empty($sdt) || empty($password)) {
            $_SESSION['messages'] = 'Bạn cần điền đầy đủ thông tin';
            header("Location: ../frontend/dangky.php");
        } else {
            unset($_SESSION['messages']);
            $result = $user_dk->add($username, $password, null, null, null, $sdt, $trangthai, null);
            $list = $user_dk->userid($username, $password);
            if ($result) {
                $_SESSION['user'] = $username;
                $_SESSION['id_kh'] = $list['id_kh'];
                header("Location: ../frontend/index.php");
            } else {
                header("Location: ../frontend/dangky.php");

            }
        }
    }
} catch (PDOException $e) {
    die("Loi");
}