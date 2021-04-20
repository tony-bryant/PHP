<?php
$show_separators = True; // 设置 $foo 为 TRUE
echo $show_separators;//输出为1
echo "<br>";

$action = "123";
if ($action != "show_version") {
    echo "The version is 1.23\n";
}

if ($show_separators) {
    echo "<hr>\n";
}

$str1 = "1";
$bool1 = (bool)$str1;
$bool2 = (boolean)$str1;
echo gettype($bool1);
echo "<br>";
echo $bool1;
echo "<br>";
echo gettype($bool2);
echo "<br>";
echo $bool2;
echo "<br>";
