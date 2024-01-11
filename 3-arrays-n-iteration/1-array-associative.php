<?php

// Создаем ассоциативный массив товаров
$products = [
  'product 1' => 100,
  'product 2' => 200,
  'product 3' => 300,
];

// Выводим список товаров и их цены
foreach ($products as $product => $price) {
  echo "$product: $price\n";
}