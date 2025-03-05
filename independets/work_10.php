<?php

$array1 = [['name'=>'balbes','age'=>2], ['name'=>'tusik','age'=>4], ['name'=>'kesha', 'age'=>3]];

$translate = ["name"=>"Имя","age"=>"Возраст"];

foreach($array1 as $arr1) {
    foreach($arr1 as $key => $value) {
        print("{$translate[$key]}: {$value}" . '   ');
    }
    print('<br>');
}