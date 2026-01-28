<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ví dụ về hàm hồi qui</title>
</head>
<body>
<?php
    // Sử dụng hàm nặc danh làm hàm hồi qui 
    echo preg_replace_callback('~-([a-z])~', function ($match) {
        return strtoupper($match[1]);
    }, 'hello-world');
    // outputs helloWorld

    // Sử dụng hàm nặc danh làm giá trị của một biến
    $greet = function ($name) {
        printf("Hello %s\r\n", $name);
    };

    $greet('World');
    $greet('PHP');
?>
</body>
</html>