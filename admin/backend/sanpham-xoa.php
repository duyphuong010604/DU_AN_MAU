<?php 
include "pdo.php";
include "../act-admin/sanpham.php";
$sanpham = new sanpham();
if(isset($_GET['id_sp'])){
    $id_sp = $_GET['id_sp'];
    $result = $sanpham->delete($id_sp);
    if($result){
        header("Location:../frontend/danhsach_sanpham.php");
    }else{
        echo "noth cong";
    }
}
