<?php
include "../backend/pdo.php";
include "../act-admin/timkiem.php";

$timkiem = new timkiem();
if(isset($_POST['timkiem-loai'])){
    $noidung_timkiem = $_POST['timkiem-loai'];
    
    $ketqua = $timkiem->timkiem_khachhang($noidung_timkiem);
    var_dump($ketqua);
}