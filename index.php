<?php

$name = 'Илья';
$surname = 'Харченко';
$date = 29;
$month = 'Март';
$year = 2006;
$age = 17;
$happy = 0.99;

echo ' Имя: ' . $name . ' Фамилия: ' . $surname . '<br>';
echo ' Дата рождения: ' .  $date . "\n" . $month . "\n" . $year . '<br>';
echo ' Возраст: ' . $age . '<br>';
echo ' Уровень радости: ' . $happy . ' :) ' . '<br>';

$hasCar = false;
$number = -0.78902;

echo "Есть машина? " .  $hasCar . '<br> ';
echo 'Номер : ' . $number . '<br>';

define("NUMBER_E", 2.71828);
echo defined("NUMBER_E");
const NUMBER_K = '<br>2';
echo NUMBER_K;


