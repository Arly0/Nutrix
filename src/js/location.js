$(document).ready(function(){
    if($('button').is('.js-go-toPage')){
        $('.js-go-toPage').click(function(){
            let page = $(this).attr("name");
            //  TODO сделать путь относительным
            document.location.href = "/front/dist/" + page;
        });
    }
});