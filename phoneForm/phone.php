<?php
ob_start();
$title = 'Номер телефона';
require '../blocks/header.php';
?>

<div class="container">
    <h3 class="text-secondary">Номер телефона</h3>
    <form action="" method="POST">
        <input type="tel" class="form-control mt-3" name="phone" placeholder="Введите свой номер телефона..">
        <input type="submit" class="btn btn-primary mt-3">
    </form>
</div>

<?php
if (!empty($_REQUEST['phone'])) {
    setcookie('phone', $_REQUEST['phone'], time() + 3600);
}
?>

<?php
require '../blocks/footer.php';
ob_end_flush();
?>
