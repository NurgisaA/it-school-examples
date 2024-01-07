<?php


$month = "January";

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


if ($month == "December" || $month == "January" || $month == "February") {
    echo "It's winter.";
} elseif ($month == "March" || $month == "April" || $month == "May") {
    echo "It's spring.";
} elseif ($month == "June" || $month == "July" || $month == "August") {
    echo "It's summer.";
} else {
    echo "It's autumn.";
}


if (in_array($month, ["December", "January", "February"])) {
    echo "It's winter.";
} elseif (in_array($month, ["March", "April", "May"])) {
    echo "It's spring.";
} elseif (in_array($month, ["June", "July", "August"])) {
    echo "It's summer.";
} else {
    echo "It's autumn.";
}


