<?php
require 'vendor/autoload.php';
require_once 'home.php';

 echo date('Y-m-d | H:i:s', strtotime('+ 2 hours') ) . '<br>';


$date = date('d ');
$date .= rusMonth(date('m'));
echo $date;

// Можно без break; Так как есть return
function rusMonth($month)
{
    switch ($month) {
        case 1:
            return 'Января';
            break;
        case 2:
            return 'Февраля';
            break;
        case 3:
            return 'Марта';
            break;
        case 4:
            return 'Апреля';
            break;
        case 5:
            return 'Мая';
            break;
        case 6:
            return 'Июня';
            break;
        case 7:
            return 'Июля';
            break;
        case 8:
            return 'Августа';
            break;
        case 9:
            return 'Сентября';
            break;
        case 10:
            return 'Октября';
            break;
        case 11:
            return 'Ноября';
            break;
        case 12:
            return 'Декабря';
            break;
    }
}
