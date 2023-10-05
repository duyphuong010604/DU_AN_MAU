<?php 
include "pdo.php";
include "../act-admin/loaisp.php";

$loaisp = new loaisp();
if(isset($_POST["luu"])){
    $id_lsp = $_POST["id_lsp"];
    $ten = $_POST["ten"];
    $trangthai = $_POST["trangthai"];
    $result = $loaisp->update($id_lsp,$ten,$trangthai);
    if($result){
        header("Location: ../frontend/danhsach_loaisp.php");
    }else{
        echo "thatbai";
    }

}