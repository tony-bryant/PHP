<?php

class foo
{
    var $key1;
    var $key2;

    function do_foo()
    {
        echo "Doing foo." . "<br>";
    }
}

$bar = new foo;
$bar->do_foo();
var_dump(key($bar));//key1

$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // PHP 7.2.0 后输出 'bool(true)'，之前版本会输出 'bool(false)'
var_dump(key($obj)); // PHP 7.2.0 后输出 'string(1) "1"'，之前版本输出  'int(1)'

$obj = (object) 'ciao';
echo $obj->scalar;  // outputs 'ciao'
