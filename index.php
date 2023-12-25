<?php
require 'vendor/autoload.php';
require_once 'home.php';

$from = 'testing@mail.ru';
$to = 'example@mail.ru';
$message = 'Проверочное письмо, отправленное с помощью PHP';
$subject = 'Тема сообщения';

$subject = "=?utf-8?B?" . base64_decode($subject) . "?=";
$headers = "From: $from\r\n Reply-to: $from\r\n Content-type:text/plain; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);