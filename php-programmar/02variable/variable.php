<?php

//var $unset_bool;
//echo($unset_bool ? "true\n" : "false\n");

//$unset_str .= 'abc';
//var_dump($unset_str);

$a = 1;
$b = 2;

function Sum()
{
    //使用函数外的全局变量
    //写法1
    global $a, $b;
    $b = $b * 2;

    //写法2
    $GLOBALS['b'] = $GLOBALS['b'] * 2;
}

Sum();
echo $b;

//函数执行完后 不丢失静态变量
function test()
{
    //只在第一次初始有用
    //只在编译时期解析一次
    static $a = 0;
    echo "<br>" . $a;
    $a++;
}

for ($i = 0; $i < 3; $i++) {
    test();
}

$obj = null;

function test_global_ref()
{
    global $obj;
    $new = new stdclass;
    var_dump($new);
    //左边是引用 右边是实际地址
    $obj = &$new;
}

test_global_ref();
var_dump($obj);

//声明一个变量
$a = 'hello';
//可变变量 = $hello
//声明一个变量名
$$a = 'world';
$$b = 'world';
echo "$a ${$a}" . "<br>";
echo "$a $hello" . "<br>";

//数组的可变变量
//声明类
class foo {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

//生成实例
$foo = new foo();
$bar = 'bar';
//声明数组
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";//I am bar.
echo $foo->${$baz[1]} . "\n";//$baz[1]='bar' ${$baz[1]}=${bar}

$start = 'b';
$end   = 'ar';
echo $foo->${$start . $end} . "\n";//字符串拼接

$arr = 'arr';
echo $foo->{$arr[1]} . "\n";//取第2个字符 r