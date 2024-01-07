<?php


// Условные операторы if…then…elseif…else
$number = 43;

if ($number > 0) {
    echo "Число положительное";
} elseif ($number < 0) {
    echo "Число отрицательное";
} else {
    echo "Число равно нулю";
}

// Оператор выбора switch case
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "It's the beginning of the week.";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's the middle of the week.";
        break;
    case "Friday":
        echo "It's almost the weekend!";
        break;
    default:
        echo "It's a weekends day.";
}

// задача написать программу, которая выводит на график заняти в зависимости от дня недели
// понедельник, четверг - вечерная группа
// вторник, пятница - утренняя группа
// в остальные дни - нету занятий


