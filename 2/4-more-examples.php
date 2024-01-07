<?php

// example 1
// определение времени года по месяцу
$month = "January";

// с помощью switch
switch ($month) {
    case "January":
    case "February":
    case "December":
        echo "It's winter.";
        break;
    case "March":
    case "April":
    case "May":
        echo "It's spring.";
        break;
    case "June":
    case "July":
    case "August":
        echo "It's summer.";
        break;
    case "September":
    case "October":
    case "November":
        echo "It's autumn.";
        break;
    default:
        echo "Invalid month.";
}

// с помощью if
if ($month == "December" || $month == "January" || $month == "February") {
    echo "It's winter.";
} elseif ($month == "March" || $month == "April" || $month == "May") {
    echo "It's spring.";
} elseif ($month == "June" || $month == "July" || $month == "August") {
    echo "It's summer.";
} else {
    echo "It's autumn.";
}


// с помощью if и in_array()
if (in_array($month, ["December", "January", "February"])) {
    echo "It's winter.";
} elseif (in_array($month, ["March", "April", "May"])) {
    echo "It's spring.";
} elseif (in_array($month, ["June", "July", "August"])) {
    echo "It's summer.";
} else {
    echo "It's autumn.";
}


// example 2
// приветствие пользователя

$is_authorized = true;
$is_admin = false;

if ($is_authorized) {
    if ($is_admin) {
        echo "Hello, admin!";
    } else {
        echo "Hello, user!";
    }
} else {
    echo "Hello, guest!";
}


// example 3
// определение типа переменной
$var = 43;

if (is_string($var)) {
    echo "It's a string.";
} elseif (is_int($var)) {
    echo "It's an integer.";
} elseif (is_float($var)) {
    echo "It's a float.";
} elseif (is_bool($var)) {
    echo "It's a boolean.";
} elseif (is_array($var)) {
    echo "It's an array.";
} elseif (is_object($var)) {
    echo "It's an object.";
} elseif (is_null($var)) {
    echo "It's null.";
} else {
    echo "It's something else.";
}