<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($user == "admin" && $pass == "123456") {
            $_SESSION['admin'] = $user;
            header("Location:admin.php");
            exit;
        } else {
            echo "Sai tài khoản hoặc mật khẩu";
        }
    }
    ?>

    <form method="post">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <button name="login">Đăng nhập</button>
    </form>

</body>

</html>