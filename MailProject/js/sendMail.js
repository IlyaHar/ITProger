$('#sendMail').on('click', function () {
    var name = $('#name').val().trim();
    var email = $('#email').val().trim();
    var phone = $('#phone').val().trim();
    var message = $('#message').val().trim();

    if (name === '') {
        $('#errorMess').text('Введите корректное имя');
        return false;
    } else if (email === '') {
        $('#errorMess').text('Введите корректный email');
        return false;
    } else if (phone === '') {
        $('#errorMess').text('Введите корректный номер телефона');
        return false;
    } else if (message.length < 5) {
        $('#errorMess').text('Введите сообщение не менее 5 символов');
        return false;
    }

        $('#errorMess').text('');

    $.ajax({
        url: 'MailProject/checkMail.php',
        type: 'POST',
        cache: false,
        data: {'name': name, 'email': email, 'phone': phone, 'message': message},
        dataType: 'html',
        beforeSend: function () {
            $('#sendMail').prop('disabled', true)
        },
        success: function(data) {
            if (!data) {
               alert('Письмо не отправлено :(');
            } else {
                $('#mailForm').trigger('reset');
            }
            $('#sendMail').prop('disabled', false)
        }
    })
});