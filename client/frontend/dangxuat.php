<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['$id_kh']);
header('Location: dangnhap.php');
exit;