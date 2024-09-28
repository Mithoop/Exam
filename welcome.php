<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Приветствие</title>
</head>
<body>
    <h1>Привет, <?php echo htmlspecialchars($username); ?>!</h1>
    <a href="logout.php">Выйти</a>
</body>
</html>
