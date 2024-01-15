<?php





$products = [
    [
        "title" => "product 1",
        "price" => 4000
    ],
    [
        "title" => "product 2",
        "price" => 5000
    ],
    [
        "title" => "product 2",
        "price" => 6000
    ],
    [
        "title" => "product 3",
        "price" => 7500
    ],
    [
        "title" => "product 4",
        "price" => 7900
    ],
    [
        "title" => "product 5",
        "price" => 10000
    ]
];


$name = "product 2";


echo $products[1]['title'];


function search(array $arr, string $text)
{
    $acc = [];
    foreach ($arr as $item) {
        if ($item['title'] === $text){
            $acc[] = $item;
        }
    }
    return $acc;
}

function searchByPriceRange(array $arr, int $min, int $max)
{
    $acc = [];
    foreach ($arr as $item) {
        if ($item['price'] >= $min && $item['price'] <= $max){
            $acc[] = $item;
        }
    }
    return $acc;
}


var_dump( searchByPriceRange($products, 5000, 7800));
