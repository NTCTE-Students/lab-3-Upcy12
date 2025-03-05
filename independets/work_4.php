<?php

$array = [12,457,18,96,12,457];

$newArray = array_unique($array);


foreach ($newArray as $value) {
    print($value . '<br>');
}