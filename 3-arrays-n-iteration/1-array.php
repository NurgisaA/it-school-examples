<?php

// Создание массива
$array = [1, 2, 3, 4, 5];

// Доступ к элементам массива
echo $array[0]; // 1
echo $array[2]; // 3

// Добавление элемента в массив
array_push($array, 6);

// Удаление элемента из массива
array_pop($array);

// Перебор элементов массива с помощью цикла foreach
foreach ($array as $value) {
  echo "Значение: $value\n";
}


