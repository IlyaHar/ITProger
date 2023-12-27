<?php
ob_start();
$title = 'Как вас зовут ?';
require '../blocks/header.php';
?>

<div class="container">
    <h1 class="text-primary">Приветствуем, <br> как вас зовут ?</h1>
    <hr>
    <form action="" method="POST">
        <input type="text" name="name" class="form-control mt-2" placeholder="Введите свое имя..">
        <input type="submit" class="btn btn-primary mt-3" >
    </form>
</div>

<?php
if (!empty($_REQUEST['name'])) {
    setcookie('name', $_REQUEST['name'] , time() + 3600);
}

if (!empty($_COOKIE['name'])) {
    echo "<div class='container'><h1 class='text-primary text-center'>Привет, <br> $_COOKIE[name] </h1></div>";
}

?>

<?php
require '../blocks/footer.php';
ob_end_flush();
?>
