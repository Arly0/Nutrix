$(document).ready(function(){
        let formCall = $('.js_switchForm'),
            havnt = $('.js_window-noCallback'),
            form = $('.js_callback__form');

        let buyShow = $('.js_showBuyPopap'),
            buyPopap = $('.js_buy_modal');
            

        formCall.click(function(){
            havnt.addClass('hidden');
            $('.have__callback').addClass('hidden');
            form.removeClass('hidden');
        });
        
        let close = $('.js_close'),
            back = $('.js_theme');
        close.click(function(){
            $('.js_modal_callback').addClass('hidden');
            $('.modal__curt').addClass('hidden');
            $('.js_modal_thx').addClass('hidden');
            $('.js_buy_modal').addClass('hidden');
            back.addClass('hidden');
        });

        buyShow.click(function(){
            $('.modal__curt').removeClass('hidden');
            back.removeClass('hidden');
        });
    


    // * открывает модальное окно при отправки комментария
    // !yдалить. т.к. нужно отправлять форму на бэекенд
    $('.js_open_send').click(function(e){
        e.preventDefault();
        back.removeClass('hidden');
        $('.js_modal_thx').removeClass('hidden');
    });


 
});