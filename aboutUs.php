<?php
$title = 'Про нас';
require  'blocks/header.php';
?>
<div class="container">
    <h1>Про нас</h1>
    <!-- Можно изменить сheckPost.php на checkGet.php и method="POST" на method="GET" и тогда форма будет передаваться через метод GET -->
    <form action="checkPost.php" method="POST" class="mt-4">
        <input type="text" name="name" placeholder="Введите свое имя.." class="form-control mt-3">
        <input type="email" name="email" placeholder="Введите свой email.." class="form-control mt-3">
        <input type="password" name="password" placeholder="Введите свой пароль.." class="form-control mt-3">
        <textarea name="message" class="form-control mt-3" placeholder="Введите сообщение.."></textarea>
        <input type="submit" class="btn btn-primary mt-3">
    </form>
</div>



<?php
require 'blocks/footer.php';

?>
