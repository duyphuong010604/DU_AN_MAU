<?php
session_start();
unset($_SESSION['admin']);
header('Location: ../frontend/login.php');
exit;