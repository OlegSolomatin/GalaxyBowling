$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: '../php/apivk.php',
        //data: formNm.serialize(),
        success: function (data) {
            // Вывод текста результата отправки
            $('#vkontakte_count').html(data);
        },
        error: function (jqXHR, text, error) {
            // Вывод текста ошибки отправки
            $('#vkontakte_count').html(error);
        }
    });
});