<?php
// Lưu cookie
if (isset($_POST["save"])) {
    $name = $_POST["hoten"];
    setcookie("hoten", $name, time() + 3600);
    header("Location: cookie.php");
}

// Xóa cookie
if (isset($_POST["delete"])) {
    setcookie("hoten", "", time() - 3600);
    header("Location: cookie.php");
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Demo Cookie PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            background: white;
            padding: 60px;
            width: 360px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .save {
            background: #667eea;
            color: white;
        }

        .delete {
            background: #e74c3c;
            color: white;
            margin-top: 10px;
        }

        .welcome {
            background: #f1f1f1;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>Demo Cookie PHP</h2>

        <?php if (isset($_COOKIE["hoten"])): ?>
            <div class="welcome">
                Xin chào <b><?php echo $_COOKIE["hoten"]; ?></b>
            </div>

            <form method="post">
                <button class="delete" name="delete">Xóa Cookie</button>
            </form>

        <?php else: ?>
            <form method="post">
                <input type="text" name="hoten" placeholder="Nhập họ tên của bạn" required>
                <button class="save" name="save">Lưu Cookie</button>
            </form>
        <?php endif; ?>
    </div>

</body>

</html>