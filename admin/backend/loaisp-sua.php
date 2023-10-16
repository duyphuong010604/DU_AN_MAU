<?php
include "pdo.php";
include "../act-admin/loaisp.php";

$loaisp = new loaisp();
if (isset($_POST["luu"])) {
    $id_lsp = trim($_POST["id_lsp"]) ?? " ";
    $ten = trim($_POST["ten"]) ?? " ";
    $trangthai = trim($_POST["trangthai"]) ?? " ";
    try {
        if (
            empty($ten) || empty($trangthai)
        ) {
            echo "Loi";
        } else {
            $result = $loaisp->update($id_lsp, $ten, $trangthai);
            if ($result) {
                header("Location: ../frontend/danhsach_loaisp.php");
            } else {
                header("Location: ../../error/404.html");
            }
        }
    } catch (PDOException $e) {
        header("Location: ../../error/500.html");
    }

}