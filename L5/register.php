<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <title>Đăng ký thông tin</title>
</head>
<body>
<?php
if(isset($_POST['addUser'])){

    $userName = trim($_POST['userName'] ?? '');
    $rawPass  = $_POST['password'] ?? '';
    $fName    = trim($_POST['fullName'] ?? '');
    $age      = (int)($_POST['age'] ?? 0);
    $gender   = (int)($_POST['gender'] ?? 0);

    if($userName !== '' && $rawPass !== ''){
        require_once('mysql_connect.php');

        // (1) Kiểm tra userName đã tồn tại chưa
        $stmt = $conn->prepare("SELECT userName FROM user WHERE userName = ?");
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0){
            echo "Tên đăng nhập này đã tồn tại, bạn phải chọn tên đăng nhập khác<br />";
            echo "<a href='javascript:history.back()'>Quay lại</a>";
            $stmt->close();
            $conn->close();
            exit;
        }
        $stmt->close();

        // (2) Insert user mới
        // Tài liệu dùng md5; bạn có thể nói trong thuyết trình: md5 chỉ để minh họa, thực tế dùng password_hash.
        $passwordHash = md5($rawPass);

        $stmt2 = $conn->prepare("INSERT INTO user(userName,password,fullName,age,gender) VALUES(?,?,?,?,?)");
        $stmt2->bind_param("sssii", $userName, $passwordHash, $fName, $age, $gender);

        if($stmt2->execute()){
            echo "Chúc mừng bạn đã đăng ký thành công. <a href='list_user.php'>Xem danh sách</a>";
        } else {
            echo "Lỗi khi đăng ký: " . htmlspecialchars($stmt2->error);
        }

        $stmt2->close();
        $conn->close();
    } else {
        echo "Bạn cần nhập userName và password";
    }
} else {
    echo "Bạn chưa nhập thông tin đăng ký (không submit từ form).";
}
?>
</body>
</html>
