<?php

//1.单引号
echo 'this is a simple string';

// 可以录入多行
//中间空格被删除
echo 'You can also have embedded newlines in 
strings this way as it is
okay to do';

// 输出： Arnold once said: "I'll be back"
//插入单引号
echo 'Arnold once said: "I\'ll be back"';

// 输出： You deleted C:\*.*?
//插入反斜杠
echo 'You deleted C:\\*.*?';

// 输出： You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// 输出： This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// 输出： Variables do not $expand $either
echo 'Variables do not $expand $either';
$var = 1 ;
echo "This will not expand: a newline\r \$ ";

echo "This will not expand: a newline\n \$ \\ {$var}";

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax. '''
EOD;

echo $str;

//echo <<<EOT
//My name is "$name". I am printing some $foo->foo.
//Now, I am printing some {$foo->bar[1]}.
//This should print a capital 'A': \x41
//EOT;

var_dump(array(<<<EOD
foobar!
EOD
));

static $bar = <<<LABEL1
Nothing in here...
LABEL1;

echo $bar;

$bar = <<<EOT
bar
EOT;

echo <<<"FOOBAR"
Hello World!
FOOBAR;

$great = 'fantastic';
echo "This is { $great}";
?>