<?php
$a = 1234; // 十进制数
$a = 0123; // 八进制数 (等于十进制 83)
$a = 0x1A; // 十六进制数 (等于十进制 26)
$a = 0b11111111; // 二进制数字 (等于十进制 255)
//$a = 1_234_567; // 整型数值 (PHP 7.4.0 以后)

$large_number = PHP_INT_MAX;
var_dump($large_number);                     // int(9223372036854775807)

$large_number = PHP_INT_MAX + 1;
var_dump($large_number);                     // float(9.2233720368548E+18)

echo 1/2;//0.5
echo "<br>";
echo  intdiv(1,2);//0
?>