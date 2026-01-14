<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ví dụ về hàm</title>
</head>
<body>
<?php
    // Truyền tham số kiểu tham chiếu
    function add_some_extra(&$string) {
        $string .= " sau khi chịu tác động của hàm.";
    }

    $str = "Chuỗi ban đầu";
    echo "$str<br>";
    add_some_extra($str);
    echo $str;

    // Hàm có sử dụng tham số với giá trị ngầm định
    echo "<br>Ví dụ về hàm sử dụng tham số với giá trị ngầm định<br>";
    function makecoffee($type = "cappuccino") {
        return "Making a cup of $type<br>";
    }

    echo makecoffee();
    echo makecoffee(null);
    echo makecoffee("espresso");
?>
</body>
</html>