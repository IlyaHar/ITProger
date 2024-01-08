<?php
session_start();


unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);

unset($_SESSION['name_err']);
unset($_SESSION['email_err']);
unset($_SESSION['subject_err']);
unset($_SESSION['message_err']);

unset($_SESSION['success_mail']);
function redirect()
{
    header('Location: contact.php');
    exit();
}

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));


$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;

if (mb_strlen($name) <= 1) {
    $_SESSION['name_err'] = "Ваше имя: \"$name\" - не корректное! Введите корректное имя.";
    redirect();
} else if (mb_strlen($email) <= 5 || strpos($email, '@') == false) {
    $_SESSION['email_err'] = "Ваш email: \"$email\" не корректный! Введите корректный email.";
    redirect();
} else if (mb_strlen($subject) <= 5) {
    $_SESSION['subject_err'] = "Ваша тема: \"$subject\" короче чем 5 символов! Введите тему больше 5 символов.";
    redirect();
}  else if (mb_strlen($message) <= 15 ) {
    $_SESSION['message_err'] = "Ваше сообщение: \"$message\" короче чем 15 символов! Введите тему больше 15 символов.";
    redirect();
} else {
    $subject = "=?utf-8?B?" . base64_encode('Сообщение с сайта') . "?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    mail("harcenkoila278@gmail.com", $subject, $message, $headers);
    $_SESSION['success_mail'] = "Вы успешно отправили сообщение!";
    redirect();
}

