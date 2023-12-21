<?php

function checkAge($age)
{
    if ($age >= 18) {
        return true;
    } else {
        echo 'Родители разрешили ?' . '<br>';
    }
}

checkAge(17);

// 1 вариант реализации данной функции  :
function distance($time, $speed): float
{
    return $time * $speed;
}

 $distance = distance(1, 1);

echo "Вы проедете: $distance километров <br> ";

// 2 вариант реализации данной функции

function kmCount($hour, $km): float
{
    $res = $hour * $km;
    printRes($res);
    return $res;
}

function printRes($res): void
{
    // Это короткая условная конструкция , где говорится если расстояние будет равно 1 ($res == 1), то (?) выведится текст "Вы проедете 1 км <br>",
    // иначе ":" выведится текст "Вы проедете $res км <br>"
    $word = $res == 1 ? "Вы проедете 1 км <br>" : "Вы проедете $res км <br>";
    echo $word;
}

$res = kmCount(14, 75);


function test()
{
    global $count; // $count = 0;
    $count++;
    echo 'Количество вызовов: ' . $count . '<br>';
}

test();
test();
test();
test();
test();
test();
test();
test();
test();
test();



