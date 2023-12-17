<?php

$x = 11;

switch ($x) {
    case 10:
        echo 'Number is 10 ';
        break;
    case 15:
        echo 'Number is 15';
        break;
    default:
        echo 'Something else <br>';
        break;
}

$a = 4;
$b = 2;

$mathOperation = '+';

switch ($mathOperation) {
    case '+':
        $res = $a + $b;
        echo 'Результат: ' . $res;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/' || ':':
        echo $a / $b;
        break;
    case '%':
        echo $a % $b;
        break;
    default:
        echo 'Данный пример посчитать невозможно!';
}