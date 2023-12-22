<?php
$title = 'Форма';
require 'blocks/header.php';
?>
<form action="checkForm.php" class="text-center" method="POST">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Пароль">
    <input type="submit" value="Отправить">
</form>

<?php
require 'blocks/footer.php';
?>
