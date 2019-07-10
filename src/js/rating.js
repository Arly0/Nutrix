$(document).ready(function(){
    let star = $('.form__star_rate');
    star.click(function () {
        let index = $(this).index();
        star.removeClass('js_rate-active');
        star.addClass('js_rate-deactive');
        let num = index;
        num++;
        $('input[name="rating"]').val(num);
        // $('.success__rating-text').text('( ' + (num) + ' )');
        for(let i = 0;i <= index; i++){
            star.eq(i).removeClass('js_rate-deactive');
            star.eq(i).addClass('js_rate-active');
        }
    });
});
        