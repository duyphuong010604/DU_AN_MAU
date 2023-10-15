<?php 
include "pdo.php";
include "../act-admin/loaisp.php";

$loaisp = new loaisp();
if (isset($_GET['id_lsp'])) :
    $id_lsp = $_GET['id_lsp'];
    try {
        $result=$loaisp->delete($id_lsp);
        if ($result){
            header("Location:../frontend/danhsach_loaisp.php");
        }else{
            echo "that bai";
        } 
    } catch (PDOException $e ) {
        die("Lỗi " ) ;  
    }
    
endif;