<?php

$array1 = [1,4,7,3,9,6,7];

sort($array1);

foreach($array1 as $arr) {
    print($arr . ",");
}

print("<br>");

rsort($array1);

foreach($array1 as $arr) {
    print($arr .",");
}