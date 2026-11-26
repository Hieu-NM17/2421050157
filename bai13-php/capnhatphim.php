<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi {
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }

        .i-text input,
        .i-text select {
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }

        button {
            padding: 5px 0;
            width: 100%;
        }

        form {
            padding: 10px;
        }

        h1 {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <?php
    include 'connect.php';
    $id = $_GET['id'];
    $sql = "SELECT phim.*, phim_the_loai.the_loai_id FROM phim
            LEFT JOIN phim_the_loai ON phim.id = phim_the_loai.phim_id
            WHERE phim.id = '$id'";
    $result = mysqli_query($conn, $sql);
    $phim = mysqli_fetch_assoc($result);

    $sql_dd = "SELECT * FROM dao_dien";
    $result_dd = mysqli_query($conn, $sql_dd);

    $sql_tl = "SELECT * FROM the_loai";
    $result_tl = mysqli_query($conn, $sql_tl);
    ?>

    <h1>Cập nhật phim</h1>
    <form class="khoi" action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="POST">
        <div class="i-text">
            <input type="text" name="tenPhim" value="<?php echo $phim['ten_phim'] ?>" id="" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocGia" value="<?php echo $phim['quoc_gia'] ?>" id="" placeholder="Quốc gia">
        </div>

        <div class="i-text">
            <select name="theLoai" id="">
                <option value="">Chọn thể loại</option>
                <?php
                while ($tl = mysqli_fetch_array($result_tl)) {
                ?>
                    <option value="<?php echo $tl['id'] ?>" 
                    <?php
                    if ($tl['id'] == $phim['the_loai_id']) {
                        echo 'selected';
                    }
                    ?>>
                        <?php echo $tl['ten_the_loai'] ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="i-text">
            <select name="daoDien" id="">
                <option value="">Chọn đạo diễn</option>
                <?php
                while ($dd = mysqli_fetch_array($result_dd)) {
                ?>
                    <option value="<?php echo $dd['id'] ?>" <?php
                    if ($dd['id'] == $phim['dao_dien_id']) {
                        echo 'selected';
                    }
                    ?>>
                        <?php echo $dd['ho_ten'] ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="i-text">
            <input type="datetime-local" name="nam" value="<?php echo $phim['nam'] ?>" id="" placeholder="Năm">
        </div>
        <div class="i-text">
            <input type="number" name="doTuoi" value="<?php echo $phim['do_tuoi'] ?>" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="moTa" value="<?php echo $phim['mo_ta'] ?>" id="" placeholder="Mô tả">
        </div>
        <button>Cập nhật</button>
    </form>

    <?php
    if (
        isset($_POST['tenPhim']) &&
        isset($_POST['quocGia']) &&
        isset($_POST['theLoai']) &&
        isset($_POST['daoDien']) &&
        isset($_POST['nam']) &&
        isset($_POST['doTuoi']) &&
        isset($_POST['moTa'])
    ) {
        $tenPhim = $_POST['tenPhim'];
        $quocGia = $_POST['quocGia'];
        $theLoai = $_POST['theLoai'];
        $daoDien = $_POST['daoDien'];
        $nam = $_POST['nam'];
        $doTuoi = $_POST['doTuoi'];
        $moTa = $_POST['moTa'];

        if (
            !empty($tenPhim) &&
            !empty($quocGia) &&
            !empty($theLoai) &&
            !empty($daoDien) &&
            !empty($nam) &&
            !empty($doTuoi) &&
            !empty($moTa)
        ) {
            $sql = "UPDATE `phim` SET `ten_phim`='$tenPhim', `quoc_gia`='$quocGia', `dao_dien_id`='$daoDien', `nam`='$nam', `do_tuoi`='$doTuoi', `mo_ta`='$moTa' WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $sql_ptl = "UPDATE `phim_the_loai` SET `the_loai_id`='$theLoai' WHERE phim_id = '$id'";
                mysqli_query($conn, $sql_ptl);

                header('Location: index.php?page_layout=phim');
            } else {
                echo 'Cập nhật phim thất bại';
            }
        } else {
            echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    }
    ?>
</body>

</html>