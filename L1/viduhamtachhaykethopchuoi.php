<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Các hàm biến đổi chuỗi</title>
</head>
<body>
<?php
    $str = 'Vi du ve cac ham xu ly chuoi';
    echo "Mảng các từ tách bằng hàm explode:";
    print_r(explode(' ', $str));

    echo "<br>Mảng các từ tách bằng hàm str_split:";
    print_r(str_split($str, 3));

    $arr = explode(' ', $str);
    echo "<br>" . implode(" ", $arr);
    echo "<br>" . join("-", $arr);
?>
</body>
</html>
