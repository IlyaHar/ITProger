<?php

for ($i = 16; $i <= 23; $i++) {
    if ($i == 21) {
        continue;  // Пропускает елемент в массиве
    }
    echo $i . '<br>';
}

$element = 16;

while ($element <= 23) {
    if ($element == 21) {
        $element++;
        continue;
    }
    echo $element . '<br>';
    $element++;
}

for ($index = 11; $index <= 33; $index++) {
    echo $index . '<br>';
}

$array = 11;

while ($array <= 33) {

    echo $array . '<br>';
    $array++;
}

for ($i = -30; $i <= 0; $i += 3) {
    echo $i . '<br>';
}


  $element = -30;
do {
    echo $element . '<br>';
    $element += 3;
} while ($element <= 0);


for ($i = -30; $i <= 0; $i += 3) {
    if ($i == -27 || $i == -21 || $i == -15) {
        continue;
    }
    echo $i . '<br>';
}

$element = -30;

do {
    if ($element == -27 || $element == -21 || $element == -15) {
        $element+= 3;
        continue;
    }
    echo $element . '<br>';
    $element += 3;
} while($element <= 0);

$arr = [
    'name' => 'John',
    'surname' => 'Smith',
    'email' => 'johnsmith@gmail.com',
    'phone' => '1234512345'
];

foreach ($arr as $item => $value) {
    echo $item . ':' . "\n" . $value . '<br>';
}

foreach ($arr as  $value) {
    echo  $value . '<br>';
}