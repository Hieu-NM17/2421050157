<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        ul {
            display: flex;
            align-items: center;
            gap: 30px;
            background-color: #191A1B;
            list-style: none;
            font-size: larger;
            padding: 20px;
        }

        a {
            color: white;
            text-decoration: none;
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['dangnhap'])) {
        header("Location: trangchu.php");
    }
    ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page_layout=taikhoan">Tài khoản</a></li>
                <li><a href="index.php?page_layout=danhmuc">Danh mục</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
            </ul>
        </nav>
    </header>
    <?php
    if (isset($_GET['page_layout'])) {
        $page  = $_GET['page_layout'];
        switch ($page) {
            case 'trangchu':
                include 'trangchu.php';
                break;
            case 'taikhoan':
                include 'taikhoan.php';
                break;
            case 'danhmuc':
                include 'danhmuc.php';
                break;
            case 'phim':
                include 'phim.php';
                break;
            case 'themtaikhoan':
                include 'themtaikhoan.php';
                break;
            case 'capnhattaikhoan':
                include 'capnhattaikhoan.php';
                break;
        }
    }
    ?>
</body>

</html>