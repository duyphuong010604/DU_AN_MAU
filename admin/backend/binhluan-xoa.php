<?php
session_start();
include "pdo.php";
include "../act-admin/binhluan.php";
$binhluan = new binhluan();

if($_GET['id_bl']){
    $id_bl = $_GET['id_bl'];
    try{
        $result = $binhluan->delete($id_bl);
        if ($result){
            header("Location:../frontend/danhsach_binhluan.php");
        }else{
            header("Location: ../../error/404.html");
        }
    }catch(PDOException $e){
        header("Location: ../../error/500.html");
    }
   
}