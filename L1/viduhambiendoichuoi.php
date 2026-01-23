<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Các hàm biến đổi chuỗi</title>
</head>
<body>
<?php
    $str = '        Vi du ve cac ham xu ly chuoi        ';
    echo "Chuỗi ban đầu: $str<br>";
    echo "Hàm Ltrim: " . ltrim($str) . "<br>";
    echo "Hàm Rtrim: " . rtrim($str) . "<br>";
    echo "Hàm trim: " . trim($str) . "<br>";

    $str = trim($str);
    echo "<br>Hàm biến đổi tất cả ký tự về chữ hoa: " . strtoupper($str);
    echo "<br>Hàm biến đổi về chữ thường: " . strtolower($str);
    echo "<br>Hàm biến đổi chữ đầu tiên về chữ hoa: " . ucfirst($str);
    echo "<br>Hàm biến đổi chữ đầu tiên của các từ về chữ hoa: " . ucwords($str);

    $str = "Ví dụ về hàm wordwrap với một từ dài: supercalifragilistic";
    echo "<hr>$str<br>";
    echo "Chuỗi bị cắt thành nhiều dòng khi viewsource: " . wordwrap($str, 15) . "<br />";
    echo "<hr>Chuỗi bị cắt thành nhiều dòng khi hiển thị:<br>";
    echo wordwrap($str, 15, "<br />\n");

    echo "<hr>Các từ dài sẽ bị cắt thành nhiều dòng:<br>";
    echo wordwrap($str, 15, "<br />\n", TRUE);
?>
</body>
</html>
