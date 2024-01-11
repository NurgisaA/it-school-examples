<?php
// Используя цикл for, поправьте функцию isPrime,
// чтобы она правильно определяла, является ли число простым.

function isPrime($num) {


    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}


// тест 1
$checkNumber = 13;

if (isPrime($checkNumber)) {
    echo "$checkNumber - простое число";
} else {
    echo "$checkNumber - не простое число";
}

// Ожидаемый вывод: 13 - простое число
echo "\n";

// тест 2
// Тк 1 не является простым числом, то функция должна возвращать false
$checkNumber = 1;

if (isPrime($checkNumber)) {
    echo "$checkNumber - простое число";
} else {
    echo "$checkNumber - не простое число";
}
// Ожидаемый вывод: 1 - не простое число


?>