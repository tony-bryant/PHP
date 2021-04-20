<?php
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
//$d = 1_234.567; // 从 PHP 7.4.0 开始支持

//比较浮点数
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

//在5位进度内相等
if(abs($a-$b) < $epsilon) {
    $c = NAN;
    echo gettype(is_nan($c));
    echo "<br>";
    echo is_nan($c);
    echo "<br>";
    echo "true";
}
?>