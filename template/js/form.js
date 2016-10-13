// Прячем-отображаем
$(function () {
    $('.choices').change(function (e) {
        $('#searched_text').toggle($('#optionsRadios3').prop('checked'));
    });
	
// Беспроводная передача данных =)
    $('form#remote_search').submit(function (event) {
        event.preventDefault();
        var form = $(this).serialize();
        $.post('/process', form).done(function (html) {
            $('#results').html(html);
        });
    });

});