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
    $sql_dd = "SELECT * FROM dao_dien";
    $result_dd = mysqli_query($conn, $sql_dd);

    $sql_tl = "SELECT * FROM the_loai";
    $result_tl = mysqli_query($conn, $sql_tl);
    ?>

    <h1>Thêm phim</h1>
    <form class="khoi" action="index.php?page_layout=themphim" method="POST" enctype="multipart/form-data">
        <div class="i-text">
            <input type="text" name="tenPhim" id="" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocGia" id="" placeholder="Quốc gia">
        </div>

        <div class="i-text">
            <select name="theLoai" id="">
                <option value="">Chọn thể loại</option>
                <?php while ($tl = mysqli_fetch_array($result_tl)) { ?>
                    <option value="<?php echo $tl['id'] ?>">
                        <?php echo $tl['ten_the_loai'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="i-text">
            <select name="daoDien" id="">
                <option value="">Chọn đạo diễn</option>
                <?php while ($dd = mysqli_fetch_array($result_dd)) { ?>
                    <option value="<?php echo $dd['id'] ?>">
                        <?php echo $dd['ho_ten'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="i-text">
            <input type="date" name="nam" id="" placeholder="Năm">
        </div>
        <div class="i-text">
            <input type="number" name="doTuoi" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="moTa" id="" placeholder="Mô tả">
        </div>

        <div class="i-text">
            <input type="text" name="trailer" placeholder="Trailer">
        </div>

        <div class="i-text">
            <!-- Đổi name="image" thành name="fileToUpload" cho khớp với PHP -->
            <input type="file" id="imageUpload" name="fileToUpload" accept="image/*">
        </div>
        <!-- Thêm name="submit" -->
        <button type="submit" name="submit">Thêm</button>
    </form>

    <?php
    if (
        isset($_POST['tenPhim']) &&
        isset($_POST['quocGia']) &&
        isset($_POST['theLoai']) &&
        isset($_POST['daoDien']) &&
        isset($_POST['nam']) &&
        isset($_POST['doTuoi']) &&
        isset($_POST['moTa']) &&
        isset($_POST['trailer'])

    ) {
        $tenPhim = $_POST['tenPhim'];
        $quocGia = $_POST['quocGia'];
        $theLoai = $_POST['theLoai'];
        $daoDien = $_POST['daoDien'];
        $nam = $_POST['nam'];
        $doTuoi = $_POST['doTuoi'];
        $moTa = $_POST['moTa'];
        $trailer = $_POST['trailer'];

        if (
            !empty($tenPhim) &&
            !empty($quocGia) &&
            !empty($theLoai) &&
            !empty($daoDien) &&
            !empty($nam) &&
            !empty($doTuoi) &&
            !empty($moTa) &&
            !empty($trailer)&&
            !empty($_FILES["fileToUpload"]["name"])
        ) {
            ######### Bắt đầu xử lý thêm ảnh #########
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Kiểm tra xem file ảnh có hợp lệ không
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    echo "File không phải là ảnh.";
                    $uploadOk = 0;
                }
            }

            // Kiểm tra nếu file đã tồn tại
            if (file_exists($target_file)) {
                echo "File này đã tồn tại trên hệ thống";
                $uploadOk = 2;
            }

            // Cho phép các định dạng file ảnh nhất định
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
                $uploadOk = 0;
            }
            ######### Kết thúc xử lý ảnh #########

            if ($uploadOk == 0) {
                echo "File của bạn chưa được tải lên";
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    # CODE CŨ ĐẶT Ở ĐÂY
                    $sql = "INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`,`trailer`, `poster_url`)
                            VALUES ('$tenPhim', '$quocGia', '$daoDien', '$nam', '$doTuoi', '$moTa','$trailer', '$target_file')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $phim_id = mysqli_insert_id($conn);
                        $sql_ptl = "INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) 
                                    VALUES ('$phim_id', '$theLoai')";
                        mysqli_query($conn, $sql_ptl);

                        header('Location: index.php?page_layout=phim');
                    } else {
                        echo 'Thêm phim thất bại';
                    }
                } else {
                    echo "Có lỗi xảy ra khi tải ảnh lên thư mục upload.";
                }
            }
        } else {
            echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin và chọn ảnh</p>";
        }
    }
    ?>
</body>

</html>