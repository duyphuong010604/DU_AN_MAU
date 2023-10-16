<?php
session_start();
include "pdo.php";
include "../atc-user/dangnhap.php";

$user = new User();
try {
    if (isset($_POST['dangnhap'])) {
        $username = trim($_POST['username']) ?? ' ';
        $password = trim($_POST['password']) ?? ' ';

        if (empty($username) || empty($password)) {

            $_SESSION['messages'] = "Bạn vui lòng điền đầy đủ thông tin";
            header("Location:../frontend/dangnhap.php");
        } else {
            unset($_SESSION['messages']);
            if ($user->checkUser($username, $password)) {
                $result = $user->userid($username, $password);
                $_SESSION['user'] = $username;
                $_SESSION['id_kh'] = $result['id_kh'];
                header("Location: ../frontend/index.php");
            } else {
                header("Location: ../frontend/dangnhap.php");
            }

        }
    }
} catch (PDOException $e) {
    die("loi");
}