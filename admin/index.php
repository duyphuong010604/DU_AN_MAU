<?php

session_start();

$action = "home";
if (isset($_GET['act']))
    $action = $_GET['act'];
if (!isset($_SESSION['admin'])) {
    $action = "login";
}

switch ($action) {
    case "home":
        header("Location: frontend/index.php");
        break;
    case "login":
        header("Location: frontend/login.php");
        break;
    case "logout":
        unset($_SESSION['admin']);
        header("location: index.php");
        break;
}