<?php
$title = 'Отправка сообщения';
require_once 'blocks/header.php';
?>
<div class="container">
    <h1>Отправка сообщения</h1>
    <form id="mailForm" action="" method="POST" class="mt-4">
        <input type="text" id="name" name="name" placeholder="Введите свое имя.." class="form-control mt-3">
        <input type="email" id="email" name="email" placeholder="Введите свой email.." class="form-control mt-3">
        <input type="tel" id="phone"  name="phone" placeholder="Введите свой номер телефона.." class="form-control mt-3">
        <textarea name="message" id="message" class="form-control mt-3" placeholder="Введите сообщение.."></textarea>
        <input type="button" id="sendMail" value="Отправить" class="btn btn-primary mt-3 w-25">
    </form>
    <div id="errorMess"></div>
</div>
<?php
require_once 'blocks/footer.php';
?>