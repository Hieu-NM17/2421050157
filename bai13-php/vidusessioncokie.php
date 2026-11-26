<?php
    // 1. Session
    session_start();
    $_SESSION['Name'] = 'user';

    echo 'Session Name: ' . $_SESSION['Name'];

    // 2. Cookies
    $cookieName = 'user';
    $cookieValue = 'Kien';

    setcookie($cookieName, $cookieValue, time() + 86400, '/');
    if (isset($_COOKIE[$cookieName])) {
        echo 'cookie đã tồn tại';
    }
    else {
        echo 'Cookie chưa được thiết lập';
    }
?>