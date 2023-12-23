<?php
require 'vendor/autoload.php';
//$email = $_POST['email'];
//$pass = $_POST['password'];
// 1 вариант
//if (trim($email) == '' || $pass == '') {
//    echo 'Введите все данные!';
//} elseif (str_contains($email,  '@')) {
//    echo 'Вы ввели не корректный email!';
//} elseif (trim($pass) == 'qwerty') {
//    echo 'Вы ввели не корректный пароль!';
//} else {
//    header('Location: https://itproger.com/ ');
//}
// 2 вариант
if ($_POST['email'] == "" || $_POST['password'] == "") {
    echo 'Не все данные введены!';
} elseif (str_contains($_POST['email'], '@')) {
     echo 'Нет знака @!';
} elseif ($_POST['password'] == 'qwerty') {
    echo 'Неверный пароль!';
} else {
    header('Location: https://itproger.com');
    exit();
}