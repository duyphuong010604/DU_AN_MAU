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
            header('Location: ../../error/404.html');
        } 
    } catch (PDOException $e ) {
        header('Location: ../../error/500.html');
    }
    
endif;