<?php
require 'vendor/autoload.php';
require_once 'home.php';

$u = 45;
$c = 5.9;
// 1 вариант
 echo is_numeric($u) . '<br>';
 echo is_object($c) . '<br>';
 echo is_float($c) . '<br>';
 // 2 вариант
 echo is_integer($u) . '<br>';
 // Является ли перемення обьектом is_scalar
 echo is_scalar($c) . '<br>';
 // Является ли переменная дробной is_double
 echo is_double($c) . '<br>';
 // Возвращает тип данных
 echo gettype($u) . '<br>';
 echo is_array($c) . '<br>';


 $arr = array(2, -14, 23, 9, -4, 12, -1) ;
// echo min($arr) . '<br>';

$minimum = $arr[0];

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] < $minimum && $arr[$i] > 0)
        $minimum = $arr[$i];
}

echo "Минимум - $minimum <br>";


$arr = array(2, -14, 23);
$arr_2 = [9, -4, 12, -1];
// Соеденяет массивы
$array = array_merge($arr, $arr_2);
// Разбрасывает элементы массива в разном порядке
shuffle($array);
// Удаляет элемент массива по индексу
unset($array[0]);
// Сортирует элементы массива от меньшего к большему, rsort REVERSE наоборот от большего к меньшему
sort($array);
// Обновляет индексы массива
$array = array_values($array);
// Ищет элемент в массиве
$array = in_array(2, $array);
// Выводит массив
print_r($array);
