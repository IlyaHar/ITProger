<?php
//header('Location: https://itproger.com/courses/');
//exit();
require 'vendor/autoload.php';
require_once 'home.php';

phpinfo();
// 1 вариант
echo "<pre>" . $_SERVER['HTTP_HOST'] . '</pre>';
echo $_SERVER['REQUEST_URI'] . '<br>';

// 2 вариант
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;

