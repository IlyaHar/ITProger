<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}


$str_res = '';
$array_1 = array(1, 2, 3, 5, 7, 9, 10);
$array_2 = [1, 4, 3, 5, 8, 9, 0];

for ($i = 0; $i < count($array_1); $i++) {
    for ($j = 0; $j < count($array_2); $j++)
        if ($array_1[$i] == $array_2[$j]) {
            $str_res .= $array_1[$i] . ';' . '<br>';
        }
}

echo $str_res;


$elements = [3, -2, 9, -34, 23, -12, 1];
$sum = 0;

for ($i = 0; $i < count($elements); $i++) {
    if ($elements[$i] >= 0)
        $sum += $elements[$i];
}

if ($sum == 0) {
    echo ' Нет чисел > 0 ';
} else {
    echo 'Сумма :' . $sum . '<br>';
}

$arr = [1, 10, 20, 30, 40, 50, 100];
$max = $arr[0];

for ($i = 0; $i < 7; $i++) {
    if ($arr[$i] > $max); {
        $max = $arr[$i];
    }
}

echo "Максимум: $max <br>";

$matrix = [
    [ 0, 34, -2],
    [3, -4, 5 ]
];

$min = $matrix[0][0];

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        if ($matrix[$i][$j] < $min) {
            $min = $matrix[$i][$j];
        }
    }
}

echo "Минимальный элемент: $min <br>";

$user = [
    'name' => 'John',
    'surname' => 'Smith',
    'email' => 'johnsmith@gmail.com',
    'phone' => 1234512345
];

foreach ($user as $item => $value) {
    echo $item . ':' . "\n" . $value . "<br>";
}