<?php

// Цикл for

$arr = [];
for ($i = 0; $i < 5; $i++) {
//  echo "Число: $i\n";
    $arr2 = [];
    for ($k = 0; $k < 5; $k++) {
        $arr2[] = $k;
        $arr[] = $arr2;
    }

}

var_dump($arr);