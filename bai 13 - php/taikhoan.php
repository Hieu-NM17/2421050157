<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th {
            background-color: antiquewhite;
            padding: 10px;
        }

        td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .capnhat {
            background-color: green;
        }

        .xoa {
            background-color: gray;
        }
    </style>
</head>

<body>
    <a style="color: black;" href="index.php?page_layout=themtaikhoan">TÀI KHOẢN</a>
    <?php
    include 'connect.php';

    $sql = "select * from nguoi_dung";
    $result = mysqli_query($conn, $sql);

    
    ?>


    <table>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Giới tính</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['ten_dang_nhap'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['ho_ten'] ?></td>
                <td><?php echo $row['ngay_sinh'] ?></td>
                <td><?php echo $row['so_dien_thoai'] ?></td>
                <td><?php echo $row['gioi_tinh'] ?></td>
                <td>
                    <a href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']?>" class="capnhat" >Cập nhật</a>
                    <a href="xoataikhoan.php?id=<?php echo $row['id']?>" class="xoa">Xoá</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>