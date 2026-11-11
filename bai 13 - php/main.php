<?php
        session_unset();
        session_start();
        if (!isset($_SESSION['login'])) {
            header('Location: login.php');
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Trang chủ
</body>
</html>