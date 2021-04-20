<?php
$a = 1;
echo $a + $a++ . "<br>"; // may print either 2 or 3

$b = 2;
$c = 3;
echo $b ** $c . "<br>";

//传值赋值 不改变原值
$d = $b;
$d++;
echo $b . "<br>";
echo $d . "<br>";

//引用赋值 改变原值
$e = &$b;
$e++;
echo $b . "<br>";
echo $e . "<br>";

//如果$a不是null则$a 否则是??的值
$a = $a ?? '1233456';
echo $a . "<br>";
$a = null;
$a = $a ?? '1233456';
echo $a . "<br>";

$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
    . ' %3$s (%4$2d = %4$04b)' . "<br>";
echo <<<EOH
 ---------     ---------  -- ---------<br>
 result        value      op test<br>
 ---------     ---------  -- ---------<br>
EOH;

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

//且
echo "<br> Bitwise AND <br>";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

//或
echo "<br>Bitwise Inclusive OR <br>";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

//异或 不相同的取1
echo "<br>Bitwise Exclusive OR (XOR) <br>";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}

echo strval(1 <=> 1) . "<br>"; // 0
echo (string)(1 <=> 2) . "<br>"; // -1
echo strval(2 <=> 1) . "<br>"; // 1

$output = `ls -al`;
echo "<pre>$output</pre>";

$s = 'a';
//for ($i = 0; $i < 100; $i++) {
//    echo $s . "<br>";
//    $s++;
//}

$s = 'A';
//for ($i = 0; $i < 100; $i++) {
//    echo $s . "<br>";
//    $s++;
//}

// key 0 value 1 key1 value2 key2 value3
$a_array = [1, 2, 3];
$b_array = [3, 4, 5, 6];
//在左边的基础上补充，不会覆盖
$a_array += $b_array;
print_r($a_array);

//声明接口
interface MyInterface
{
}

//接口实现类
class MyClass implements MyInterface
{
}

//实例
$a = new MyClass;
$b = new MyClass;
//字符串
$c = 'MyClass';
var_dump($c);//string
$d = 'NotMyClass';

//多使用变量 让PHP自动判断类型
//true
var_dump($a instanceof $b); // $b is an object of class MyClass
//实例 string
var_dump(is_a($a, "MyClass")); // $b is an object of class MyClass
//true
var_dump($a instanceof $c); // $c is a string 'MyClass'
//true
var_dump($a instanceof $d); // $d is a string 'NotMyClass'





