<?php

abstract class MyClass3
{
    abstract public function sum1($a, $b);

    abstract protected function sum2($a, $b);

    //报错
//    abstract private function sum3($a, $b);
}