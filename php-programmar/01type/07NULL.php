<?php

$num = 123;
var_dump($num);
//1.显式指定为null 不区分大小写
$num = null;
var_dump($num);
//2.未赋值
//var_dump($num1);
//3.使用unset()
$num1 = 123;
unset($num1);//置为null 删除该变量
//var_dump($num1);
