<?php

    $array1 = array(1, 2, 3, 4, 5, 6, 7);

    // array_walk function takes three parameter: fisrt one is array, second one is callback funtion
    // Third parameter is optional

    //callback funtion
    function print_array($var, $key)
    {
        echo "Key ".$key."-> Value ". $var."\n";
    }
    //callback funtion with refence array and value changed
    function by_reference(&$var, $key)
    {
        $var=$var+6;
    }
    array_walk($array1, 'by_reference');



print_r($array1);
