<?php 
include "pdo.php";
include "../act-admin/loaisp.php";

$loaisp = new loaisp();
if (isset($_GET['id_lsp'])) :
    $id_lsp = $_GET['id_lsp'];  
    $loaisp->delete($id_lsp); 
endif;