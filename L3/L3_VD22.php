<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ví dụ về hàm hồi qui</title>
</head>
<body>
<?php
    echo preg_replace_callback("/_([a-z])/", 'test', 'hello_world_wide_web');

    function test($match){
        return '_' . strtoupper($match[1]);
    }
?>
</body>
</html>
