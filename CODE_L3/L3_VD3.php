<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Các tham số của hàm</title>
</head>
<body>
<?php
    function foo($a, $b, $c){
        $numargs = func_num_args();
        echo "Number of arguments: $numargs<br>";
        if ($numargs >= 2){
            echo "Second argument is: " . func_get_arg(1) . "<br />\n";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++){
            echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
        }
    }

    foo(1, 2, 3);
?>
</body>
</html>
