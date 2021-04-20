<?php

trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

trait A1 {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B1 {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A1, B1 {
        B1::smallTalk insteadof A1;
        A1::bigTalk insteadof B1;
    }
}

class Aliased_Talker {
    use A1, B1 {
        //用B1而不用A1
        B1::smallTalk insteadof A1;
        A1::bigTalk insteadof B1;
        //使用as修改访问控制和别名
        B1::bigTalk as talk;
    }
}

class ParentClass
{
    use ezcReflectionReturnInfo;
    function __construct()
    {
        print "<br>parent constructor<br>";
    }
}