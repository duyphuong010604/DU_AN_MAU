<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['messages']);
header('Location: ../frontend/login.php');
exit;