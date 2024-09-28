<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'register') {
        header("Location: register.php");
        exit();
    } elseif ($_GET['action'] == 'login') {
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
    <h1>Добро пожаловать!</h1>
    <a href="?action=register">Регистрация</a> | <a href="?action=login">Авторизация</a>
</body>
</html>
