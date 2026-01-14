<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "hocphp";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

echo "✅ Kết nối MySQL thành công";
?>
