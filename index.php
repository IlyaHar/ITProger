<?php
require 'vendor/autoload.php';
require_once 'home.php';

 $fileName = 'test.txt';

// 1 вариант
$file = fopen($fileName, 'w');
fwrite($file, 'Это наш первый созданный файл при помощи PHP');
fclose($file);
file_put_contents('someText.txt', 'Это наш первый созданный файл при помощи PHP' );
echo file_get_contents('fileToSave.txt') . '<br>';


// rename($fileName, 'fileToSave.txt');
// 2 вариант
file_put_contents('someText.txt', 'Это наш первый созданный файл при помощи PHP');
echo file_get_contents('someText.txt') . '<br>';

echo fileperms(__FILE__);
chmod(__FILE__, 0777);