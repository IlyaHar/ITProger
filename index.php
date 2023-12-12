<?php

$x = 5.6;
$y = 8.9;

$sum = $x + $y;
$diff = $x - $y;
$mult = $x * $y;
$devide = $x / $y;
$ostatok = $x % $y;

echo ' Cумма: ' . $sum . "\n";
echo ' Разница: ' . $diff . "\n";
echo ' Умножение: ' . $mult . "\n";
echo ' Деление: ' . $devide . "\n";
echo ' Остаток: ' . $ostatok . "\n";

$number = -2;
$number *= 3;
// ++ добавляет +1, -- добавляет -1
$number++;

echo " Результат: " . $number . "\n";

// метод max находит наибольшее число
// метод min находит наименьшее число
echo max( 9, 23, 0, -24.5, 34, 11, 41, 3, -3.2, 3 ) . "\n";

// Метод mt_rand or rand выводит рандомное чилсло
echo mt_rand(1, 10);

// Метод ceil округляет к большему
// Метод round округляет до ближайшего значения
// Метод floor округляет к меньшему
echo floor(sqrt(2));