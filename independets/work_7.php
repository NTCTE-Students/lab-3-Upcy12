<?php

$str = "loliki di dfaun";

// print($str[0]);

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == " ") {
        print('<br>');
    }
    else {
        print($str[$i]);
    }
}