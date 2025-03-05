<?php

$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9];

$merge = array_merge($array1, $array2);

foreach ($merge as $arr) {

    print($arr . "<br>");
}