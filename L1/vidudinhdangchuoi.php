<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Định dạng chuỗi</title>
</head>
<body>
    <h4>Định dạng</h4>
    <?php
        $i = 12.556;
        echo "Hiển thị ở dạng bình thường: \$i = $i<br>";
        printf("Hiển thị với 1 chữ số thập phân: \$i = %.1f", $i);
        echo "<br />";
        printf("Hiển thị với 2 chữ số thập phân: \$i = %.2f", $i);
        echo "<br />";
        printf("Không hiển thị phần thập phân \$i = %.0f", $i);
    ?>
</body>
</html>
