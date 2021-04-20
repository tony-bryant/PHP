<?php
$foo = True;

if($foo){
    echo "true"."<br>";
}

//转换后为false的情况
//布尔值 false 本身
var_dump((bool) false);   // bool(false)
//整型值 0（零）及 -0 (零)
var_dump((bool) 0);         // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
//浮点型值 0.0（零）-0.0(零)
var_dump((bool) 2.3e5);     // bool(true)
//空字符串，以及字符串 "0"
var_dump((bool) "foo");     // bool(true)
var_dump((bool) "false");   // bool(true)
var_dump((bool) "");        // bool(false)
//不包括任何元素的数组
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
//特殊类型 NULL（包括尚未赋值的变量）
//从空标记生成的 SimpleXML 对象

//特殊 资源和NAN都为true
