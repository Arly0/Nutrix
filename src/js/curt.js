$(document).ready(function(){
    let minus = $('.js_calc-minus'),
        plus = $('.js_calc-plus'),
        delete_prod = $('.js_delete_prod'),
        cart = $('.js_open-cart');


        // //  !! watching on change of prices
        // $('.curt__price .price span').bind('DOMSubtreeModified', function(){
        //     watchChange();
        //     return false;
        //     let newValue = $(this).html(),
        //         sum = 0;
        //     newValue = newValue.split(" грн");
        //     newValue = newValue[0];
        //     newValue = newValue.split(" ");
        //     newValue = newValue[0] + newValue[1];
        //     newValue = Number(newValue);
        //     sum += newValue;
        //     console.log(sum);
        // });
        

        $('.curt__products').each(function(index, elem) {
    
            let value = $(this).find('.prices span').eq(1).html();
            value = value.split(" ");
    
            let quantity = $(this).find('.js_quant').html();
            value = value[0];
            let sum = (value, quantity) => value * quantity;
            $(this).find('.curt__price .price span').html(spaces(sum(value, quantity)) + " грн");
        });

        
        watchChange();

        // *open popap
        cart.click(function(){
            $('.modal__curt').removeClass('hidden');
            $('.js_theme').removeClass('hidden');
        });


        // *count quantity
        minus.click(function(){
            let quant = $(this).parent().siblings('.js_quant').html();
            if(quant <= 1){
                $(this).closest('.curt__products').addClass('hidden');
            }
            $(this).parent().siblings('.js_quant').html(mCounter(quant));

            $('.curt__products').each(function(index, elem) {
    
                let value = $(this).find('.prices span').eq(1).html();
                value = value.split(" ");
        
                let quantity = $(this).find('.js_quant').html();
                value = value[0];
                let sum = (value, quantity) => value * quantity;
                $(this).find('.curt__price .price span').html(spaces(sum(value, quantity)) + " грн");
            });


            watchChange();
            
        });    
        plus.click(function(){
            let quant = $(this).parent().siblings('.js_quant').html();
            if(quant >= 20){
                
            }
            else{
                $(this).parent().siblings('.js_quant').html(pCounter(quant));
            


                $('.curt__products').each(function(index, elem) {
    
                    let value = $(this).find('.prices span').eq(1).html();
                    value = value.split(" ");
            
                    let quantity = $(this).find('.js_quant').html();
                    value = value[0];
                    let sum = (value, quantity) => value * quantity;
                    $(this).find('.curt__price .price span').html(spaces(sum(value, quantity)) + " грн");
                });


                watchChange();

            }
        });    
        
    // *delete product
    delete_prod.click(function(){
        $(this).closest('.curt__products').addClass('hidden');
        $(this).parent().find('.price span').html('0 грн');

        watchChange();
    });

    // *функция подсчета общей цены
    function watchChange(){
        let sum = 0;
        $('.curt__price .price span').each(function(ind, el){
            let newValue = $(this).html();
            newValue = newValue.split(" грн");
            newValue = newValue[0];
            if(hasWhiteSpace(newValue)){
                newValue = newValue.split(" ");
                newValue = newValue[0] + newValue[1];
            }
            newValue = Number(newValue);
            sum += newValue;
        });
        $('.curt__summ span').html(spaces(sum) + " грн")
    }
        

    // js coming to checkout page
    $('.js_checkout').click(function(){
        document.location.href = "/front/dist/checkout.php";
    });  


});


// !do not touch
function pCounter(counter){
    counter++;
    return counter;
}
function mCounter(counter){
    counter--;
    return counter;
}

function spaces(n) {
    n += "";
    n = new Array(4 - n.length % 3).join("U") + n;
    return n.replace(/([0-9U]{3})/g, "$1 ").replace(/U/g, "");
}
function hasWhiteSpace(s) {
	return s.indexOf(' ') >= 0;
}
