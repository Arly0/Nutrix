$(document).ready(function(){
    if($('input').is('.js_validate')){
        let form1 = $('#form1'),
            form2 = $('#form2');

            form1.submit(function(e){
                let valid = $(this).find('.js_validate');
                valid.each(function (i, elem) {
                    if($(elem).attr("type") == "email")
                    {
                        validMail(elem, e);
                    }
                    if($(elem).attr("type") == "tel"){
                        validTel(elem, e);
                    }
                });
            });

            form2.submit(function(e){
                let valid = $(this).find('.js_validate');
                valid.each(function (i, elem) {
                    if($(elem).attr("type") == "email")
                    {
                        validMail(elem, e);
                    }
                    if($(elem).attr("type") == "tel"){
                        validTel(elem, e);
                    }
                });
            });




        function validMail(el, e){
            let reg = /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z]{1,}?.[a-z]{0,}$/i,
                mail = $(el).val(),
                result = mail.match(reg);
            if(!result){
                $(el).css({"color": "red"});
                e.preventDefault();
            }
        }


        function validTel(el, e){
            let phone = $(el).val();
            if((phone.indexOf("_") != -1) || (phoneVal == '')){
                $(el).css({"color": "red"});
                e.preventDefault();
            }
        }
    }
});