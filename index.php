<?php

echo "\" <br>";
echo "' <br>";
echo "\\ <br>";
echo "\n <br>";
echo "<div>Block</div> <br>";

echo "\" <br>" . "' <br>" . "\\ <br>" . "\n <br>" . "<div>Block</div> <br>";

$str =  "ASDПросто текстASD";

// С помощью данной функции можно удалять какие-либо сивмволы строки.
$newStr = substr($str , 0, strlen($str) -3 );

$loverCase = substr($newStr, 0, 3 );

// С помощью этой функции строку можно сделать в нижний регистр, strtoaupper - в верхний регистр.
$result = strtolower($loverCase);

// С помощью оператора .= можно обьеденить две строки.
$result .= substr($newStr , 3);


$three = substr($result, 0, 3);

echo $three;
