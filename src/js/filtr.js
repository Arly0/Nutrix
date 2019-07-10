$(document).ready(function(){
    if($('section').is('.category')){
        let item = $('.js_hide'),
            close = $('.js_close');
        
        item.addClass('hidden');
        $('.js_moreHide').addClass('hidden');


        $('.js_iconPlusMinus').click(function(){
            if( $(this).parent().parent().find('.js_hide').hasClass('hidden')){
                $(this).parent().parent().find('.js_hide').removeClass('hidden');
                $(this).attr("src", "images/minus.svg");
            }
            else{
                $(this).parent().parent().find('.js_hide').addClass('hidden');
                $(this).attr("src", "images/plus.svg");
            }
        });

        $('body').on('change', '.js_watch', function(){
            if($(this).prop('checked')){
                $(this).siblings('.js_checkbox').attr("src", "images/checked.png");
                $(this).siblings('.js_close').removeClass('hidden');
            }
            else{
                $(this).siblings('.js_checkbox').attr("src", "images/unchecked.svg");
                $(this).siblings('.js_close').addClass('hidden');
            }
        });

        close.click(function(){
            $(this).addClass('hidden');
        });



        // * ajax send prices
        
    }
});