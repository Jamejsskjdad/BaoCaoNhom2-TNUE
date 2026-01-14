<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <title>Đọc thông tin từ CSDL</title>
</head>
<body>
<center>
<h2>Danh sách User</h2>
<table border="1" cellpadding="5" cellspacing="1">
  <tr>
    <td><b>STT</b></td>
    <td><b>Tên đăng nhập</b></td>
    <td><b>Họ và tên</b></td>
    <td><b>Giới tính</b></td>
    <td align="right"><b>Tuổi</b></td>
  </tr>

<?php
require_once('mysql_connect.php');

$query   = "SELECT * FROM `user`";
$records = mysqli_query($conn, $query);

$i = 0;
while ($row = mysqli_fetch_assoc($records)) {
    $i++;
    $genderText = ($row['gender'] == 1) ? "Nam" : "Nữ";
    echo "<tr>";
    echo "<td>{$i}</td>";
    echo "<td>" . htmlspecialchars($row['userName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['fullName']) . "</td>";
    echo "<td>{$genderText}</td>";
    echo "<td align='right'>" . (int)$row['age'] . "</td>";
    echo "</tr>";
}

mysqli_close($conn);
?>
</table>
</center>
</body>
</html>
