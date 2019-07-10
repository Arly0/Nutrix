$(document).ready(function(){
    if(($('section').is('.check')) || ($('section').is('.profile'))){
        let radioA = $('.js_radio-a'),
            radioB = $('.js_radio-b'),
            box    = $('.js_checkedBox');

        radioA.click(function(){
            radioA.each(function(index, element){
                $(this).find('.radio_custom').children('div').removeClass('active');
            });

            $(this).find('.radio_custom').children('div').addClass('active');
        });

        radioB.click(function(){
            radioB.each(function(index, element){
                $(this).find('.radio_custom').children('div').removeClass('active');
            });

            $(this).find('.radio_custom').children('div').addClass('active');
        });

        $('body').on('change','.js_checked' ,function () {
            if($(this).prop('checked')){
                $(this).parent().find('img').attr("src", "images/checked.png");
            }
            else{
                $(this).parent().find('img').attr("src", "images/unchecked.svg");
            }
    });


    // *! CHECKING PROMOCODE | ajax

    $('#promo').submit(function(event){
        let code = $('#promo .promo__field').val();

        $.ajax({
            url: 'pathToFile.php',
            type: 'POST',
            data:{
                promo: code
            },

            success: function(answer){
                // !if answer is numeric
                answer = parseInt(answer);

                if(answer){ // !true
                    $('.promo__error').addClass('hidden');
                    $('.promo__success').removeClass('hidden');
                }
                else{ // !false
                    $('.promo__success').addClass('hidden');
                    $('.promo__error').removeClass('hidden');
                }
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText + '|\n' + status + '|\n' +error);
                event.preventDefault();
           }
        });
    });
    }
});