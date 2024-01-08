<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$subject = "=?utf-8?B?" . base64_encode('Сообщение с сайта') . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$success = mail("harcenkoila278@gmail.com", $subject, $message, $headers);
echo $success;
