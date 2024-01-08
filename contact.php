<?php
session_start();

$_SESSION['name'] = $_SESSION['name'] ?? '';
$_SESSION['email'] = $_SESSION['email'] ?? '';
$_SESSION['subject'] = $_SESSION['subject'] ?? '';
$_SESSION['message'] = $_SESSION['message'] ?? '';

$_SESSION['name_err'] = $_SESSION['name_err'] ?? '';
$_SESSION['email_err'] = $_SESSION['email_err'] ?? '';
$_SESSION['subject_err'] = $_SESSION['subject_err'] ?? '';
$_SESSION['message_err'] = $_SESSION['message_err'] ?? '';

$_SESSION['success_mail'] = $_SESSION['success_mail'] ?? '';

$title = 'Отправить сообщение';

require 'blocks/header.php';
?>
<div class="container">
    <h1 class="text-secondary">Контакты</h1>
    <div class="text-success"><?= $_SESSION['success_mail'] ?></div>
    <form action="checkContact.php" method="POST">
        <input type="text" name="name" class="form-control mt-3" value="<?= $_SESSION['name'] ?>" placeholder="Введите свое имя..">
        <div class="text-danger"><?= $_SESSION['name_err'] ?></div>
        <input type="text" name="email" class="form-control mt-3" value="<?= $_SESSION['email'] ?>"   placeholder="Введите свой email..">
        <div class="text-danger"><?= $_SESSION['email_err'] ?></div>
        <input type="text" name="subject" class="form-control mt-3"  value="<?= $_SESSION['subject'] ?>"   placeholder="Введите тему сообщения..">
        <div class="text-danger"><?= $_SESSION['subject_err'] ?></div>
        <textarea name="message" class="form-control mt-3" placeholder="Введите сообщение.."><?= $_SESSION['message'] ?></textarea>
        <div class="text-danger"><?= $_SESSION['message_err'] ?></div>
        <input type="submit" class="btn btn-outline-dark mt-3">
    </form>
</div>
<?php
require 'blocks/footer.php';
?>
