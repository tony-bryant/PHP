<?php

$a_str = "黄罡";
var_dump($a_str);//length=6

class foo
{
    //var 和public
    var $foo;
    var $bar;
    public $bar1 = <<<'EOT'
bar1
EOT;
    public $bar2 = <<<"EOT"
bar2
EOT;
    public $john;

    function init()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$foo->init();
$name = 'gang';

//1 ’‘
//可以转义\'和\\
var_dump('abc \' \\ \ ');
echo 'You can also have embedded newlines in 
strings this way as it is
okay to do {$a_str}' . "<br>";

//2 “”
//可以转义特殊字符和引入变量
//\n	换行（ASCII 字符集中的 LF 或 0x0A (10)）
//\r	回车（ASCII 字符集中的 CR 或 0x0D (13)）
//\t	水平制表符（ASCII 字符集中的 HT 或 0x09 (9)）
//\v	垂直制表符（ASCII 字符集中的 VT 或 0x0B (11)）（自 PHP 5.2.5 起）
//\e	Escape（ASCII 字符集中的 ESC 或 0x1B (27)）（自 PHP 5.4.0 起）
//\f	换页（ASCII 字符集中的 FF 或 0x0C (12)）（自 PHP 5.2.5 起）
//\\	反斜线
//\$	美元标记
//\"	双引号
//\[0-7]{1,3}	符合该正则表达式序列的是一个以八进制方式来表达的字符
//\x[0-9A-Fa-f]{1,2}	符合该正则表达式序列的是一个以十六进制方式来表达的字符
echo "abc \n \r \t \v \e \f \\ \$ \" abc {$a_str}<br>";
echo "My name is {$name}. I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41" . "<br>";

//3 heredoc
/*<<<标识符
string
标识符*/
//标识符命名规则=变量命名规则
$d_str = <<<HG
abcd<br>
HG;
echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41 <br>
EOT;
echo $d_str;
echo $foo->bar2 . "<br>";

//4 nowdoc
//不进行转义
echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should not print a capital 'A': \x41
EOT
    . "<br>";

echo $foo->bar1 . "<br>";

$juice = "apple";
//变量转换
//1.简单规则
echo "He drank some $juice juice." . "<br>";//解析成功
//echo "He drank some juice made of $juices.";//解析失败 不输出$之后的

//2.复杂规则
$great = 'fantastic';
echo "This is {$great}" . "<br>";
echo "This is ${great}" . "<br>";

$name = "gang";
//echo "This is the value of the var named $name: {${$name}}" . "<br>";

//修改字符串
//可以使用[]和{}通过下标修改
$str = 'abc';
//notice
//var_dump($str['1']);
//var_dump(isset($str['1']));

//warning
//var_dump($str['1.0']);
//var_dump(isset($str['1.0']));

//warning
//var_dump($str['x']);
//var_dump(isset($str['x']));

//warning
//var_dump($str['1x']);
//var_dump(isset($str['1x']));

var_dump($str{0});

//转换成字符串
//bool->string
echo "--------<br>";
var_dump(strval(true));//1
var_dump(strval(false));//""

$array = array("foo", "bar");
//var_dump(strval($array));//"Array"

//object->string
//var_dump(strval($foo));//转换失败
var_dump($foo);//类型+内容
print_r($foo);//内容

//字符串转数值
echo "<br>--------<br>";
$foo = 1 + "10.5";//11.5
print_r($foo);

//$foo = 1 + "bob-1.3e3";//异常
//print_r($foo);
echo "<br>--------<br>";
echo "\$foo==$foo; 01type is " . gettype ($foo) . "<br />\n";

$name = "黄罡";
echo strlen($name)."<br/>";//6
echo strpos($name,"罡")."<br/>";//3
echo substr($name,"2")."<br/>";

