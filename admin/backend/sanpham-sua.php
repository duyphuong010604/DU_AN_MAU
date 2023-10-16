<?php
include "pdo.php";
include "../act-admin/sanpham.php";
$sanpham = new sanpham();

if (isset($_POST['luu'])) {
    $ten = trim($_POST['ten']) ?? " ";
    $gia = trim($_POST['gia']) ?? " ";
    $size = trim($_POST['size']) ?? " ";
    $mota = trim($_POST['mota']) ?? " ";
    $trangthai = trim($_POST['trangthai']) ?? " ";
    $id_lsp = trim($_POST['id_lsp']) ?? " ";
    $mausac = trim($_POST['mausac']) ?? " ";
    $id_sp = trim($_POST['id_sp']) ?? " ";

    try {
        if (
            empty($ten) || empty($gia) || empty($size) || empty($mota) || empty($trangthai) || empty($mausac) || empty($id_lsp)
        ) {
            echo "trong";
        } else {
            $file = $_FILES['hinhanh']['tmp_name'];

            $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);

            // doi ten file thanh thoi gian hien tai 
            $image_name = date('YmdHis') . '.' . $image_ext;

            // cau hinh duong dan de di chuyen file 
            $path = "../../uploads/" . $image_name;

            if (move_uploaded_file($file, $path)) {
                if (
                    $ten == "" ||
                    $image_name == "" ||
                    $gia == "" ||
                    $size == "" ||
                    $mota == "" ||
                    $trangthai == "" || $id_lsp == "" || $mausac == ""
                ) {
                    header("Location: ../../error/404.html");

                } else {
                    $result = $sanpham->update($id_sp, $ten, $image_name, $mausac, $gia, $trangthai, $id_lsp, $size, $mota);
                    if ($result) {
                        header("Location: ../frontend/danhsach_sanpham.php");
                    } else {
                        header("Location: ../../error/404.html");
                    }
                }
            } else {
                header("Location: ../../error/404.html");
            }
        }
    } catch (PDOException $e) {
        header("Location: ../../error/500.html");
    }


}