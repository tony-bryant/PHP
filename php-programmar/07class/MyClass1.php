<?php

class MyClass1 extends ParentClass
{

    function __construct()
    {
        parent::__construct();
        echo "<br>MyClass1 constructor<br>";
    }

    function __destruct()
    {
//        parent::__destruct();
        //不能在析构函数中抛出异常
        print "Destroying " . __CLASS__ . "\n";
    }
}
