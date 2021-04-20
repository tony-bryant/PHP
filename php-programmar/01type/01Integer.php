<?php

//十进制
var_dump(1234);
var_dump(+1234);
var_dump(-1234);
//八进制
var_dump(0123);
//十六进制
var_dump(0x1A);
//二进制
var_dump(0b11111111);
//7.4支持下划线
//var_dump(1_234_567);

//整型常量
var_dump(PHP_INT_SIZE);
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

//整形溢出
var_dump(PHP_INT_MAX + 1);

//intval()
var_dump(intval("123"));

//bool->int
var_dump(intval(true));//1
var_dump(intval(false));//0

//float->int
//注意：浮点数超出了整数范围则为未定义 无警告
var_dump(intval(3.14));//3

//null->int
var_dump(intval(null));//0
