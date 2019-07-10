$(document).ready(function(){
    if($('section').is('.fav')){
        if($('div').is('.product')){

        }
        else{
            console.log('wtf');
            let product = $('.js_category-more');
            product.eq(0).addClass('hidden');
            product.eq(1).removeClass('hidden');
            $('.noHave__product').removeClass('hidden');
        }
    }
});