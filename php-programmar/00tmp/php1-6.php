<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// 自 PHP 5.4 起
$array = [
    "foo" => "bar",
    "bar" => "foo"
];

$array = [
    "foo" => "bar",
    "bar" => "foo"
];

$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",//依次覆盖上面的值
);
var_dump($array);

//相同的key覆盖value
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
);
var_dump($array);

//不指定key则为自增的数字
$array = array("foo", "bar", "hallo", "world");
var_dump($array);

//指定部分key
$array = array(
    "a",//0
    "b",//1
    6 => "c",
    "d",//7
);
var_dump($array);

//array嵌套array
$array = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);
var_dump($array["foo"]);
var_dump($array{42});
var_dump($array["multi"]["dimensional"]["array"]);

//定义一个返回数组的方法
function getArray()
{
    return array(1, 2, 3);
}

//可以直接对数组进行引用
var_dump(getArray()[1]);
list(, $secondElement, $thirdElement) = getArray();
echo $secondElement;
echo "<br>";
echo $thirdElement;

$arr = array(5 => 1, 12 => 2);
//新增一个key=key+1 value=value
$arr[] = 56;
//所有key和value类型不一定一致
$arr["x"] = "test";
var_dump($arr);

//创建数组的新方法
$arr1[2] = 1;
var_dump($arr1);

unset($arr[5]);
var_dump($arr);

//删除整个数组
unset($arr);
//var_dump($arr[0]);//null

// 创建一个简单的数组
$array = array(1, 2, 3, 4, 5);
//打印数组
print_r($array);

//循环删除所有元素
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);//空
echo "<br>";
$array[] = 6;
print_r($array);//key=5 上一次最大下标+1
echo "<br>";

//重新建立索引
//重建数组索引
$array = array_values($array);
$array[] = 7;
print_r($array);

//获取数组长度
$count = count($array);