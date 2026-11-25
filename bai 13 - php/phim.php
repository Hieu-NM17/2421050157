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
    <a style="color: black;" href="index.php?page_layout=themphim">Phim</a>
    <?php
    include 'connect.php';

    $sql = "SELECT * FROM phim 
            JOIN dao_dien ON phim.dao_dien_id = dao_dien.id";
    $result = mysqli_query($conn, $sql);

    
    ?>


    <table>
        <tr>
            <th>ID</th>
            <th>Tên phim</th>
            <th>Quốc gia</th>
            <th>Đạo diễn</th>
            <th>Năm</th>
            <th>Độ tuổi</th>
            <th>Mô tả</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['ten_phim'] ?></td>
                <td><?php echo $row['quoc_gia'] ?></td>
                <td><?php echo $row['ho_ten'] ?></td>
                <td><?php echo $row['nam'] ?></td>
                <td><?php echo $row['do_tuoi'] ?></td>
                <td><?php echo $row['mo_ta'] ?></td>
                <td>
                    <a href="index.php?page_layout=capnhatphim&id=<?php echo $row['id']?>" class="capnhat" >Cập nhật</a>
                    <a href="xoaphim.php?id=<?php echo $row['id']?>" class="xoa">Xoá</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>