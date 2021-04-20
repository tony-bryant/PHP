<?php
//声明一个变量
$a_bool = TRUE;
$b_bool = TRUE;

$a_int = 10;
$b_int = 10;

//打印信息
//1.打印值和类型
var_dump($a_bool);//boolean true

//2.打印类型
echo gettype($a_bool)."<br>";//boolean

//3.判断类型
echo is_bool($a_bool)."<br>";//1 将true转换成字符串"1"

//类型转换
//(int), (integer) - 转换为整形 integer
//(bool), (boolean) - 转换为布尔类型 boolean
//(float), (double), (real) - 转换为浮点型 float
//(string) （$binary） "" - 转换为字符串 string
//(array) - 转换为数组 array
//(object) - 转换为对象 object
//(unset) - 转换为 NULL  已经被废弃 = 赋值为null

//1.强制类型转换
//（1）string转换
$a_bool = (string)$a_bool;//string '1' (length=1)
var_dump($a_bool);

//（2）string转换
$b_bool = (binary)$b_bool;//string '1' (length=1)
var_dump($b_bool);

//（3）string转换
$str = "$a_int";        // $str 是一个字符串
$fst = (string) $a_int; // $fst 也是一个字符串
//严格判定
if ($fst === $str) {
    echo "they are the same"."<br>";
}
//2.settype()函数
//settype ( mixed &$var , string $01type ) : bool
//type值
//“boolean” （或为“bool”，从 PHP 4.2.0 起）
//“integer” （或为“int”，从 PHP 4.2.0 起）
//“float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）
//"string"
//"array"
//"object"
//“null” （从 PHP 4.2.0 起）
echo settype($b_int,"string")."<br>";//1 成功
echo $b_int."<br>";//10







