<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Các hàm lấy thông tin về chuỗi</title>
</head>
<body>
<?php
    $st = "Vi du ve ham strlen & ham str_word_count";
    echo "Chuỗi \"$st\" có độ dài là: " . strlen($st);
    echo "<br>Số từ trong chuỗi là: " . str_word_count($st);
    echo "<br>Các từ trong chuỗi là: ";
    print_r(str_word_count($st, 1));
    echo "<br>Vị trí bắt đầu của các từ trong chuỗi là: ";
    print_r(str_word_count($st, 2));
    echo "<br>Các từ trong chuỗi với xử lý các ký tự đặc biệt là: ";
    print_r(str_word_count($st, 1, "&"));
?>
</body>
</html>
