<?php
$title = 'Номер телефона';
require '../blocks/header.php';
if (!empty($_COOKIE['phone'])) {
    $phoneNumber = $_COOKIE['phone'];
} else {
    $phoneNumber = '';
}

?>

<div class="container">
    <h3 class="text-secondary">Номер телефона</h3>
    <form action="" method="POST">
        <input type="text" class="form-control mt-3" name="name" placeholder="Введите свое имя..">
        <input type="text" class="form-control mt-3" name="surname" placeholder="Введите свою фамилию..">
        <input type="tel" class="form-control mt-3" name="phone" value="<?= $phoneNumber ?>" placeholder="Введите свой номер телефона..">
        <input type="submit" class="btn btn-primary mt-3">
    </form>
</div>

<?php
require '../blocks/footer.php';
?>
