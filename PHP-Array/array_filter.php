<?php

$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];

print_r(array_filter($entry));
/*

Array
(
    [0] => foo
    [2] => -1
)
*/


$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));


//callback funtion takes value as key
$array1 = array(1, 2, 3, 4, 5, 6, 7);
$newArray=array_filter($array1, function($value){
    return $value>3;
}, ARRAY_FILTER_USE_KEY);
echo "\ncallback funtion takes value as key\n";
print_r($newArray);

//callback funtion takes both value and key 
$newArray=array_filter($array1, function($value, $key){
    return $value>5 || $key>5;
}, ARRAY_FILTER_USE_BOTH);
echo "\ncallback funtion takes both value and key\n";

print_r($newArray);