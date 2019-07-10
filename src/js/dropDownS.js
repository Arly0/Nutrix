$(document).ready(function(){
    if($('section').is('.category')){
        let product = $('.js_unHover'),
            dd = $('.js_dropDown'),
            blockDD = $('.js_show-dropDown'),
            item = $('.js_dropDown-item'),
            menu = $('.js_mainDD');

        dd.click(function(){
            if(blockDD.hasClass('hidden')){
                blockDD.removeClass('hidden');
                product.css({"pointer-events": "none"})
            }
            else{
                blockDD.addClass('hidden');
                product.css({"pointer-events": "auto"})
            }
        });

        item.click(function(){
            blockDD.addClass('hidden');
            let value = $(this).text();

            dd.find('p').text(value);

            product.css({"pointer-events": "auto"})
        });
    }
});