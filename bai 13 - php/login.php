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
            width: 400px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }

        input {
            padding: 5px 0;
            margin: 10px 0;
        }
        
        form {
            padding: 10px;
        }
        
        h1 {
            margin: 5px 0;
        }

        .button {

        }
    </style>
</head>
<body>
    <div class="khoi">
        
        <div style="width: 80%; margin: auto; text-align: center" class="">
            <h1>Đăng nhập</h1>
            <form action="login.php" method="POST">
                <div>
                    <p><b>Tên đăng nhập</b></p>
                    <input type="text" name="username" id="">
                </div>

                <div>
                    <p><b>Mật khẩu</b></p>
                    <input type="password" name="password" id="">
                </div>

                <div class="">
                    <button type="submit">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == 'admin' && $password == '123') {
                session_start();
                $_SESSION['login'] = 'Success';
                header("location: main.php");
            }
            else {
                echo 'Tên đăng nhập hoặc mật khẩu không chính xác';
            }
        }
    ?>
</body>
</html>