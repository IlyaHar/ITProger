<?php
session_start();
setcookie("age",  mt_rand(10, 70), time() + 3600);
setcookie("age",  mt_rand(10, 70), time() + 10800);
setcookie("age",  mt_rand(10, 70), time() + 86400);
setcookie("age",  mt_rand(10, 70), time() - 86400);
setcookie("age",  mt_rand(10, 70), time() + 86400 * 30 * 12);
echo $_COOKIE["age"];

$_SESSION['date'] = time();

if ($_SESSION['date'] != 0) {
    echo date('Y m d - H:i:s', time() - $_SESSION['date']);
}

