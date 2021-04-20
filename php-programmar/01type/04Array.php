<?php
// Show all errors
error_reporting(E_ALL);//显示 E_NOTICE 级别的错误

//定义一个数组
//1.使用array()
$array1 = array(1, 2, 3);
print_r($array1);
echo "<br>";
//2.使用[]
$array2 = [1, 2, 3];
print_r($array2);

//能够转换成整型的转换成整型
//根据插入顺序 而不是根据下标
//0空着的
echo "<br>";
$array1["8"] = 8;
print_r($array1);
// 浮点数也会被转换为整型
echo "<br>";
$array1[7.7] = 7;
print_r($array1);
// 布尔值也会被转换成整型 0 1
echo "<br>";
$array1[false] = 10;
$array1[true] = 9;
print_r($array1);
// Null 会被转换为空字符串
echo "<br>";
$array1[null] = 11;
print_r($array1);
// 数组和对象不能被用为键名
//echo "<br>";
//print_r($array1);

//覆盖
echo "<br>";
$array1[1] = 1;
print_r($array1);
echo "<br>";
$array1['1'] = 1;
print_r($array1);

//遍历 key value
foreach ($array1 as $i => $value) {
    echo $i . "  " . $value . "<br>";
}
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i:" . "<br>";
//    echo "Bad: " . $array['$i'] . "\n";
    echo "Good: " . $array[$i] . "\n";
//    echo "Bad: {$array['$i']}\n";
    echo "Good: {$array[$i]}\n";
}
//不指定下标，则会新增一个value
$array1[] = 6;
print_r($array1);

//访问value
$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

//直接访问
print $arr['fruit'] . "<br>";  // apple
print $arr['veggie'] . "<br>"; // carrot

//print $arr[fruit]."<br>";//警告 未定义该变量
//定义一个变量
define('fruit', 'veggie');

print $arr['fruit'] . "<br>";
print $arr[fruit] . "<br>";

//字符串简单规则
print "Hello $arr[fruit]" . "<br>";

//字符串复杂规则
print "Hello {$arr[fruit]}" . "<br>";    // Hello carrot
print "Hello {$arr['fruit']}" . "<br>";  // Hello apple

class A
{
    private $A; // This will become '\0A\0A'
}

class B extends A
{
    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA' //可以正常访问
}

var_dump((array)new B());

//list
$colors = array('red', 'blue', 'green', 'yellow');

//特殊数组
//指定一个下标 其余都是依次增加
$firstquarter = array(1 => 'January', 'February', 'March');
print_r($firstquarter);
echo "<br>";
$nums = array(3, 2, 5, 1);
print_r($nums);
echo "<br>";
sort($nums);
print_r($nums);
echo "<br>";

//数组嵌套组成多维数组
$fruits = array("fruits" => array("a" => "orange",
    "b" => "banana",
    "c" => "apple"
),
    "numbers" => array(1,
        2,
        3,
        4,
        5,
        6
    ),
    "holes" => array("first",
        5 => "second",
        "third",
        "test"//最后一个元素可以没有下标
    )
);
print_r($fruits['holes']);
echo "<br>";
print_r($fruits['holes'][5]);
echo "<br>";
print_r($fruits['holes'][6]);
echo "<br>";
print_r($fruits['holes'][7]);
echo "<br>";

//值拷贝 深拷贝 不影响原array
$fruits1 = $fruits;
$fruits1['fruits'][]='test';
echo "<br>";
print_r($fruits['fruits']);
echo "<br>";
print_r($fruits1['fruits']);
echo "<br>";

//浅拷贝 影响原array
$fruits2 = &$fruits;
$fruits2['fruits'][]='test';
echo "<br>";
print_r($fruits['fruits']);
echo "<br>";
print_r($fruits2['fruits']);