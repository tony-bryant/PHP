<?php
function test()
{
    echo "调用test函数<br>";
}
//回调函数
call_user_func('test');
call_user_func("test");

//声明一个类
class MyClass {
    //静态方法
    static function myCallbackMethod() {
        echo 'Hello World!<br>';
    }
}

//数组下标0是类或者对象/实例 1是方法名
$obj = new MyClass();
call_user_func(array("MyClass","myCallbackMethod"));
call_user_func(array($obj, 'myCallbackMethod'));
//使用::直接调用static方法
call_user_func('MyClass::myCallbackMethod');

class C {
    //匿名函数
    public function __invoke($name) {
        echo 'Hello ', $name, "\n";
    }

    public function __invoke1($name) {
        echo 'Hello123 ', $name, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');

//字符串 Closure
$double = function($a) {
    return $a * 2;
};
var_dump($double);//Closure

$numbers = range(1, 5);
var_dump($numbers);//array

// 参数1 Closure  参数2 array
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);