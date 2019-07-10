$(document).ready(function (){
    // * open menu adaptive (burger)
    $('.js_open-menu').click(function(){
        $('.js_theme').removeClass('hidden');
        $('.tel__menu').removeClass('hidden');
    });
    $('.js_close-head-menu').click(function(){
        $('.tel__menu').addClass('hidden');
        $('.js_theme').addClass('hidden');
    });

    // *open filter menu (adaptive)
    $('.js_open_sort').click(function(){
        $('.filtr__telephone').removeClass('hidden');
        $('.js_theme').removeClass('hidden');
    });
    $('.js_close_filtr').click(function(){
        $('.filtr__telephone').addClass('hidden');
        $('.js_theme').addClass('hidden');
    });

    $('.orders__item').last().css({"border-bottom": "1px solid #31ada5"});


    // hover in head (open menu)
    let show = $('.js_showMainDD'),
        dd   = $('.js_mainDD'),
        ul = $('.header__menu ul');

        if ($(window).width() >= '500'){
            $('.js_showMainDD, .js_mainDD').mouseover(function() {
        
                dd.removeClass('hidden');
            });
            $('.header__menu ul, .js_mainDD').mouseleave(function() {
                dd.addClass('hidden');
            });
        }
        else{
            show.click(function(){
                if(dd.hasClass('hidden')){
                    dd.removeClass('hidden');
                }
                else{
                    dd.addClass('hidden');
                }
            });
        }
    // header stick menu onClick show drop down
    let el = $('.main__search'),
        ddHead = $('.main__dropDown'),
        ddHead_Item = $('.main__DD-item');

        el.click(function(){
            if(ddHead.hasClass('hidden'))
                ddHead.removeClass('hidden');
            else
                ddHead.addClass('hidden');

                $(document).mouseup(function (e) {
                    if (ddHead.has(e.target).length === 0) {
                        ddHead.addClass('hidden');
                    }
                });
        });
        ddHead_Item.click(function(){
            let value = $(this).find('.main__DD-name').text();
            value = $.trim(value);
            $('.main__input').val(value);
        });
    


    // *open all  orders --- ! order.php ! ---
    let order_more = $('.js_order-more');

    order_more.click(function(e){
        e.preventDefault();
        if($(this).hasClass('open')){
            $(this).closest('.orders__item').find('.orders__more').removeClass('hidden');
            $(this).removeClass('open');
            $(this).addClass('close');
        }
        else{
            $(this).closest('.orders__item').find('.orders__more').addClass('hidden');
            $(this).addClass('open');
            $(this).removeClass('close');
        }


    });
    let delete_fav = $('.js_product-delete');

    delete_fav.click(function(){
        $(this).closest('.product').parent().parent().addClass('hidden');
    });




    // hover and delete margin in product-complex sectyion ---- main page
    // !костыль
    if(($('section').is('.best')) && ($('section').is('.complex')) || ($('section').is('.prod'))){
        let defaultMarg = $('.js_unhover').css("margin-top");
        $('.product').mouseover(function(){
            if ($(window).width() >= '1100'){
                $('.js_unhover').css({"margin-top": "-144px"});
            }
        });
        $('.product').mouseleave(function(){
            $('.js_unhover').css({"margin-top": defaultMarg});
        });
    
        
    
    }
    else{
        
    }
    if(($('section').is('.best')) && ($('section').is('.complex'))){
        // cancel link logo on main page
        $('.main__logo a').click(function(e){
            e.preventDefault();
        });
    }



    // * отключает все чекбоксі (фильтр)
    $('.js_disable_checkboxes').click(function(){
        $('input:checked').prop('checked', false);
        $('.js_checkbox').attr('src', 'images/unchecked.svg');
        $('.js_close').addClass('hidden');
    });



    // * показывает только первые 5 комментариев
    if($('div').is('.have_coment_comments')){
        $('.have_coment_comments:lt(5)').removeClass('hidden');

         // * показывает больше отзывов
        $('.js_showProduct').click(function(){
            $('.have_coment_comments').removeClass('hidden');
        });
    }



    // * показывает больше товаров
    $('.js_category-more').click(function(){
        $('.product').removeClass('hidden');
    });

   



    // ! NEED DELETE LATER
    if($('section').is('.contact')){
        $('.form__sbm').click(function(e){
            e.preventDefault();

            $('#form1').addClass('hidden');
            $('.form__thx').removeClass('hidden');
        })
    }
});
