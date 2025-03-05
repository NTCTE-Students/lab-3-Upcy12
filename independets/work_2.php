<?php

$integers = [1,4,7,3,9,8];

sort($integers);

print(array_shift($integers) . '<br>');

rsort($integers);

print(array_shift($integers));


// print(sort($integers) . '<br>' . '<br>');
// print(rsort($integers) . '<br>' . '<br>');
// print($integers . '<br>' . '<br>');

// print(array_map($inte, $integers));