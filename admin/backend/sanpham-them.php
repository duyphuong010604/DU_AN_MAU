<?php
session_start();
include "pdo.php";
include "../act-admin/sanpham.php";

if (isset($_POST['them'])) {
    $sanpham = new sanpham();
    $ten = $_POST['ten'] ?? "";
    $gia = $_POST['gia'] ?? "";
    $size = $_POST['size'] ?? "";
    // $soluong = $_POST['soluong'] ?? "";
    $mota = $_POST['mota'] ?? "";
    $trangthai = $_POST['trangthai'] ?? "";
    $id_lsp = $_POST['id_lsp'] ?? "";
    $mausac = $_POST['mausac'] ?? "";

    $file = $_FILES['hinhanh']['tmp_name'];

    // lay extension cua file 
    $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);

    // doi ten file thanh thoi gian hien tai 
    $image_name = date('YmdHis') . '.' . $image_ext;

    // cau hinh duong dan de di chuyen file 
    $path = "../uploads/" . $image_name;

    if (move_uploaded_file($file, $path)) {
        if (
            $ten == "" ||
            $image_name == "" ||
            $gia == "" ||
            $size == "" ||
            $mota == "" ||
            $trangthai == "" || $id_lsp == "" || $mausac == ""
        ) {
            echo $ten .
                $image_name .
                $gia .
                $size .
                $soluong .
                $mota .
                $trangthai;
            $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
        } else {
            $result = $sanpham->add($ten, $image_name, $mausac, $gia, $trangthai, $id_lsp,$size, $mota);
            if ($result) {
                header("Location: ../frontend/danhsach_sanpham.php");
            } else {
                header("Location: ../frontend/them_sanpham.php");
            }
        }
    }
}
