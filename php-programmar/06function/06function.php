<?php

//可变函数
function foo()
{
    echo "In foo()<br />\n";
}

$func = 'foo';
$func();        // This calls foo()

$message = 'hello';

// 没有 "use"
$example = function () {
    //不能获取到message
//    var_dump($message);
};
$example();

// 继承 $message
$example = function () use ($message) {
    echo "<br>";
    var_dump($message);
    echo "<br>";
};
$example();//hello

$message = 'world';
$example();//hello

$message = 'hello';
//需要修改为引用类型
$example = function () use (&$message) {
    echo "<br>";
    var_dump($message);
    echo "<br>";
};
$example();//world
$message = 'world';
$example();//world

$y = 1;

//$fn1 = fn($x) => $x + $y;
//// 相当于 using $y by value:
//$fn2 = function ($x) use ($y) {
//    return $x + $y;
//};
//
//var_export($fn1(3));

function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
{
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of " . join(", ", $types) . " with $device.\n";
}

echo makecoffee();
echo '<br>';
echo makecoffee(array("cappuccino", "lavazza"), "teapot");

function sum(...$numbers)
{
    $acc = 0;
    //必须加as
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo '<br>' . sum(1, 2, 3, 4);
echo '<br>' . sum(...[1, 2, 3, 4]); //...前正常参数位置

class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // This calls the Bar() method
    }

    function Bar()
    {
        echo "<br>This is Bar<br>";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // This calls $foo->Variable()

//变量 不需要声明类型

//异常
//$example = function () {
//    var_dump($message);
//};
//$example();

$message = 'hello';
//使用use获取
$example = function () use ($message) {
    var_dump($message);
};
$example();

$message = 'world';
$example();//hello

$message = 'hello';
//使用地址
$example = function () use (&$message) {
    var_dump($message);
};
$example();
$message = 'world';
$example();//world

class Test
{
    public $name = "huanggang";

    public function testing()
    {
        return function () {
            var_dump($this);
        };
    }
}

$object = new Test;
$function = $object->testing();
$function();
