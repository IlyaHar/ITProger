<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];


if (trim($name) == '') {
    echo 'Вы не ввели имя!';
} elseif (trim(strlen($name)) <= 1) {
    echo 'Такого имени не существует!';
} elseif (trim($email) == "" || trim($pass) == '' || trim($_POST['message']) == '') {
    echo 'Введите все данные!';
} elseif (trim(strlen($pass)) < 8) {
    echo 'Пароль должен быть больше 8 символов!';
} else {
    header("Location: aboutUs.php");
    exit();
//    $_POST['password'] = md5($pass);
//    echo "<h1 class='text-info text-center'>Все данные:</h1>";
//    foreach ($_POST as $key => $value) {
//        echo "<p class='text-success text-center'>$key: $value</p>";
//    }
}

