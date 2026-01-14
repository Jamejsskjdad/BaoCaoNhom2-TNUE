<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Định dạng thời gian</title>
</head>
<body>
    <h4>Ngày hiện tại</h4>
    <?php
        echo "Ngày tháng dạng chữ: " . date("jS-F-Y");
        echo "<br>Ngày tháng dạng số: " . date("d/m/Y");
        echo "<br>Số ngày của tháng: " . date("m") . " là " . date("t");
    ?>
</body>
</html>