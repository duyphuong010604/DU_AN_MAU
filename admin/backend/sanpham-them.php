<?php
session_start();
include "pdo.php";
include "../act-admin/sanpham.php";

if (isset($_POST['them'])) {
    $sanpham = new sanpham();
    $ten = trim($_POST['ten']) ?? " ";
    $gia = trim($_POST['gia']) ?? " ";
    $size = trim($_POST['size']) ?? " ";
    // $soluong = $_POST['soluong'] ?? " ";
    $mota = trim($_POST['mota']) ?? " ";
    $trangthai = trim($_POST['trangthai']) ?? " ";
    $id_lsp = trim($_POST['id_lsp']) ?? " ";
    $mausac = trim($_POST['mausac']) ?? " ";
    try {
        if (
            empty($ten) || empty($gia) || empty($size) || empty($mota) || empty($trangthai) || empty($id_lsp) || empty($mausac)
        ) {
            $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
            include "../frontend/them_sanpham.php";
        } else {
            unset($_SESSION['messages']);
            $file = $_FILES['hinhanh']['tmp_name'];

            // lay extension cua file 
            $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);

            // doi ten file thanh thoi gian hien tai 
            $image_name = date('YmdHis') . '.' . $image_ext;

            // cau hinh duong dan de di chuyen file 
            $path = "../../uploads/" . $image_name;

            if (move_uploaded_file($file, $path)) {
                if (
                    $ten == " " ||
                    $image_name == " " ||
                    $gia == " " ||
                    $size == " " ||
                    $mota == " " ||
                    $trangthai == " " || $id_lsp == " " || $mausac == " "
                ) {
                    $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
                    include "../frontend/them_sanpham.php";
                } else {
                    unset($_SESSION['messages']);
                    $result = $sanpham->add($ten, $image_name, $mausac, $gia, $trangthai, $id_lsp, $size, $mota);
                    if ($result) {
                        header("Location: ../frontend/danhsach_sanpham.php");
                    } else {
                        header("Location: ../frontend/them_sanpham.php");
                    }
                }
            }
        }
    } catch (PDOException $e) {
        header("Location: ../../error/500.html");
    }



}