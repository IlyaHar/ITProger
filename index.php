<?php
require "home.php";
require "vendor/autoload.php";

// 1 способ
$x = 5;
$y = 10;
if ($x > $y)
    echo "$x больше чем $y <br>";
 else
    echo "$x меньше чем $y <br>";

 // 2 способ
$count = $x > $y ? " число $x больше чем $y <br>" : " число $x меньше чем $y <br>";
echo $count;

// 1 вариант
$arr = [2, 6, 7, 1, 9, 43, 53, 23, 12, 4];
$maxEl = max($arr);
echo $maxEl . "<br>";

// 2 вариант
$arr = array(5, 23, 76, 12, 3, 7, 45, 7);
$max = $arr[0];

for ($i = 0; $i < count($arr); $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
}

echo "Максимальный элемент в массиве: $max <br>";


$array = [
    [2, 0, 4],
    [3, 5, 0],
    [0, 7, 6]
];


// цикл для многомерногот массива
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] == 0) {
            continue;
        }
        echo $array[$i][$j] . "<br>";
    }
}

