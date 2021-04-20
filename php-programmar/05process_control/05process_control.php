<?php

//自动类型转换
if (10) {
    echo "true<br>";
}

function judge1($a, $b)
{
    if ($a > $b) {
        echo "a is bigger than b";
    } elseif ($a == $b) {
        echo "a is equal to b";
    } else if ($a < $b) {
        echo "a is equal to b";
    } else {
        echo "a is smaller than b";
    }
}

function judge2($a, $b)
{
    if ($a > $b):
        echo "a is bigger than b";
        echo "a is bigger than b";
    elseif ($a == $b):
        echo "a is equal to b";
    else:
        echo "a is smaller than b";
    endif;
}

$i = 1;
while ($i <= 10):
    print $i;
    print "<br>";
    $i++;
endwhile;

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);
//推荐写法 不必每次循环获取数组大小
for ($i = 0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = rand(000000, 999999);
}

$arr = array(0, 0, 0, 0);
for ($i = 0, $size = count($arr); $i < $size; ++$i) {
    $arr[$i] = $i;
}
print_r($arr);
print "<br>";
foreach ($arr as $value) {
    //迭代器需要通过地址修改数组
    $value = $value * 2;
}
print_r($arr);
print "<br>";
foreach ($arr as &$value) {
    $value = $value * 2;
}
//销毁最后一个value
unset($value); // 最后取消掉引用
print_r($arr);
print_r("<br>");

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// 现在 $arr 是 array(2, 4, 6, 8)

// 未使用 unset($value) 时，$value 仍然引用到最后一项 $arr[3]

//$arr[3]值被当前值不停的更
foreach ($arr as $key => $value) {
    // $arr[3] 会被 $arr 的每一项值更新掉…
    echo "{$key} => {$value} ";
    print_r($arr);
    print_r("<br>");
}

//$return_value = match (subject_expression) {
//    single_conditional_expression => return_expression,
//    conditional_expression1, conditional_expression2 => return_expression,
//};

//没有匹配也无异常
$i = 5;
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}


//declare(ticks=1);

// 每次 tick 事件都会调用该函数
function tick_handler()
{
    static $no = 0;
    echo strval(++$no)."tick_handler() called<br>";
}

register_tick_function('tick_handler');
//1
$a = 1;

if ($a > 0) {
    //2
    $a += 2;
    //3
    print(strval($a)."<br>");
}
//4

function test(){
    return;
    return (123);
}

include 'util.php';

echo help()."<br>";