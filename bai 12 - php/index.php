<?php
    // 
    echo 'Trung gay ';
    $hoten = 'Nguyen Trung';
    $tuoi = 20;
    echo $hoten. ' ' . $tuoi . '<br>';

    // str len: Trả về độ dài của chuỗi
    echo strlen($hoten) . '<br>';

    echo str_word_count($hoten) . '<br>';

    echo strpos($hoten, 'r') . '<br>';

    echo str_replace('Trung', 'Khoa', $hoten) . '<br>';

    $soThuNhat = 10;
    $soThuHai = 5;
    // Phép cộng

    echo $soThuNhat + $soThuHai . '<br>';

    // Phép trừ
    echo $soThuNhat - $soThuHai . '<br>';
    
    // Phép nhân
    echo $soThuNhat * $soThuHai . '<br>';

    // Phép chia
    echo $soThuNhat / $soThuHai . '<br>';

    // Toán tử gán
    $soThuNhat += $soThuHai;
    echo $soThuNhat . '<br>';
    // -= *= /=

    // Toán tử so sánh
    echo $soThuNhat > $soThuHai; 
    echo '<br>';

    // Câu điều kiện
    // if (điều kiện) {
    //     logic
    // }
    // elseif () {
    //     logic
    // }
    // else {
    //     logic
    // }

    $tong = $soThuHai + $soThuNhat;
    if ($tong < 15) {
        echo 'Nhỏ hơn 15' . '<br>';
    }
    elseif ($tong == 15) {
        echo 'Bằng 15' . '<br>';
    }
    else {
        echo 'Lớn hơn 15' . '<br>';
    }

    // Switch case
    $color = 'red';
    switch($color) {
        case 'red':
            echo '<br>';
            echo 'IS RED';
            break;
        case 'blue':
            echo '<br>';
            echo 'IS BLUE';
            break;
        default:
            echo '<br>';
            echo 'no color';
            break;
    }

    for ($i = 0; $i < 10; $i++) {
        echo $i . '<br>';
    }

    $mang = ['Khoa', 'Gay', 'VL'];
    // Đếm phần tử
    echo count ($mang) . '<br>';

    echo $mang[1] . '<br>';

    $mang[] = 'Quang Anh';
    print_r($mang);

    echo '<br>';
    unset($mang[3]);
    print_r($mang); 
?>