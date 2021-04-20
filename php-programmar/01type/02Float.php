<?php

//先转换成int 再转换成float
var_dump(floatval("1.23"));
var_dump((float)"1.23");

$a_float = NAN;
var_dump(is_nan($a_float));
//仅在此情况下为true
var_dump(NAN == true);//true
var_dump(NAN === true);
var_dump(NAN == 123);
var_dump(NAN === 123);
