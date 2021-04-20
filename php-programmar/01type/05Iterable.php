<?php

//指定默认参数 空数组 避免发生TypeError
//无返回类型 不用void
function foo(iterable $iterable = [])
{
    foreach ($iterable as $value) {
        echo $value . "<br>";
    }
    echo "<br>";
}

//返回一个可迭代类型
function bar(): iterable
{
    return [1, 2, 3];
}

function gen(): iterable
{
    yield 1;
    yield 2;
    yield 3;
}

//打印可迭代类型
foo(gen());
$array = [1, 2, 3];
foo($array);

//接口
interface Example {
    public function method(array $array): iterable;
}

//实现类
class ExampleImplementation implements Example {
    public function method(array $array): iterable {

    }

//    public function method(iterable $iterable): array {
//        // 放宽了参数类型，缩窄了返回的类型
//    }
}