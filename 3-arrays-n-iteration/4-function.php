<?php


$arr = [1,2,3,4];
$arr2 = [5,6,7,8];

//var_dump(array_merge($arr, $arr2));
//var_dump([...$arr, ...$arr2]);

function sum(...$input) {
    $output = 0;
    foreach ($input as $item) {
        $output += $item;
    }
    return $output;
}

$arr = [5, 10, 12, 234];
echo sum(...$arr);
echo "\n";


//echo addTen(15); // 25
//echo "\n";
//echo addTen(20); // 30
