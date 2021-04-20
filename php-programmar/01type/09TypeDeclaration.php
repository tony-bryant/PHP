<?php
//开启严格模式
declare(strict_types=1);

class C
{
}

class D extends C
{
}

// 它没有 extend C。
class E
{
}

//传入C和C子类的实例
function getSomeClassName(C $c)
{
    echo get_class($c) . "<br>";
}

getSomeClassName(new C);//C
getSomeClassName(new C());//C
getSomeClassName(new D);//D
getSomeClassName(new D());//D
//getSomeClassName(new E);//error
//getSomeClassName(new E());//error

function f(?C $c): ?bool
{
    var_dump($c);
//    return true;
    return null;
}

f(new C);
f(null);

function sum(int $a, int $b): int
{
    return $a + $b;
}
//联合类型在8.0.0后
//function sum1(int $a, int $b): int|bool
//{
//    return $a + $b;
//}

//print_r(sum(1, 2));
//echo "<br>";
//print_r(sum(1.5, 2.0));//Parse error
//echo "<br>";

try {
    var_dump(sum(1, 2));
    echo "<br>";
    var_dump(sum(1.5, 2.5));
    echo "<br>";
} catch (TypeError $e) {
    //打印异常
    echo 'Error: ', $e->getMessage();
    echo "<br>";
    echo "<br>";
}
//42    --> 42   ;

$array = [1, 2, 3];
print_r($array);
//传入引用类型
function addNum(array &$array): void
{
    $array[] = 4;
}
addNum($array);
print_r($array);
echo "<br>";
$array1 = [1, 2, 3];
print_r($array1);
//传入数值类型
function addNum1(array $array): void
{
    $array[] = 4;
}
addNum1($array1);
print_r($array1);