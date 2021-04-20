<?php
$a_bool = TRUE;   // 布尔值 boolean
$a_str = "pp123pp";  // 字符串 string
$a_str2 = 'foo';  // 字符串 string
$an_int = 12;     // 整型 integer

echo gettype($a_bool); // 输出:  boolean
echo "<br>";
echo gettype($a_str);  // 输出:  string
echo "<br>";

$a_bool = 123;
echo gettype($a_bool); // 输出:  integer
echo "<br>";
if (is_int($an_int)) {
    $an_int += 4;
}

if (is_int($a_bool)) {
    echo "int: $a_bool";
    echo "<br>";
}

//类型转换
//1.强制转换
//转换失败
$a_str = (int)$a_str;
echo $a_str;
echo "<br>";
echo gettype($a_str);
echo "<br>";

//2.使用settype()
//返回是否执行成功
echo settype($a_str, "string");
echo "<br>";
echo gettype($a_str);
echo "<br>";