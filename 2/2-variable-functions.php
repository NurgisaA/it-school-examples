<?php

// https://metanit.com/php/tutorial/2.3.php
$arrayVar = [1, 2, 3];
$floatVar = 3.14;


// strlen() - определение длины строки
$length = strlen("Hello, PHP!");

// is_array() - проверка, является ли переменная массивом
$isArray = is_array($arrayVar);

// gettype() - получение типа переменной
$type = gettype($floatVar);

// intval() - преобразование в целое число
$intValue = intval($floatVar);

// strval() - преобразование в строку
$strValue = strval($floatVar);

// floatval() - преобразование в число с плавающей точкой
$floatValue = floatval(12);
