<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

echo "Chào admin: " . $_SESSION['admin'];
?>
<br>
<a href="logout.php">
    <button type="button">Đăng xuất</button>
</a>