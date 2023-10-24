<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['$id_kh']);
unset($_SESSION['saimatkhau']);
unset($_SESSION['messages']);
header('Location: ../frontend/index.php');
exit;