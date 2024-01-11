<?php

function getLargest($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }

}
echo getLargest(20, 20);