$(document).ready(function(){

    /* Переменная-флаг для отслеживания того, происходит ли в данный момент ajax-запрос. В самом начале даем ей значение false, т.е. запрос не в процессе выполнения */
    var inProgress = false;
    /* С какой статьи надо делать выборку из базы при ajax-запросе */
    var startFrom = 4;

    /* Используйте вариант $('#more').click(function() для того, чтобы дать пользователю возможность управлять процессом, кликая по кнопке "Дальше" под блоком статей (см. файл index.php) */
    $('#more').click(function() {

        /* Если высота окна + высота прокрутки больше или равны высоте всего документа и ajax-запрос в настоящий момент не выполняется, то запускаем ajax-запрос */
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress) {

            $.ajax({
                url: '../vendor/toLoad.php',
                method: 'GET',
                data: {"startFrom" : startFrom},
                beforeSend: function() {
                    inProgress = true;}
            }).done(function(data){
                data = jQuery.parseJSON(data);

                if (data.length > 0) {

                    $.each(data, function(index, data){

                        /* Отбираем по идентификатору блок со статьями и дозаполняем его новыми данными */
                        $(".content").append("<div class='article'><a href='content_blog/" + data.title + ".php'>" + data.title + "</a></div>");
                    });

                    inProgress = false;
                    startFrom += 4;
                }});
        }
    });
});