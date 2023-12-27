<?php
$title = 'Как вас зовут ?';
require  '../blocks/header.php';

if (!empty($_COOKIE['name'])) {
    echo "<div class='container'><h1 class='text-primary text-center'>Привет, <br> $_COOKIE[name] </h1></div>";
}


require '../blocks/footer.php';