$(document).ready(function(){
    if($('div').is('.slick-multiple-items'))
    {
        $('.slick-multiple-items').slick({
            slidesToShow: 4, //сколько слайдов показывать в карусели
            slidesToScroll: 1, // сколько слайдов прокручивать за раз
            dots: false,
            infinite: true,
            prevArrow: $('.js_slickPrev-product'),
            nextArrow: $('.js_slickNext-product'),
            rows: 1,
            responsive: [
                {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,                  
                }
                },
                {
                breakpoint: 500,
                settings: {
                    rows: 2,
                    dots: true,
                    slidesToShow: 2,
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }

    if($('div').is('.slick-company-list'))
    {
        $('.slick-company-list').slick({
            slidesToShow: 5, //сколько слайдов показывать в карусели
            slidesToScroll: 1, // сколько слайдов прокручивать за раз
            dots: false,
            prevArrow: $('.js_slickPrev-company'),
            nextArrow: $('.js_slickNext-company'),
            responsive: [
                {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,                  
                }
                },
                {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                }
                },
                {
                breakpoint: 375,
                settings: {
                    slidesToShow: 2,                  
                }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }

    if($('div').is('.prod__slider'))
    {
        $('.prod__slider').slick({
            slidesToShow: 1, //сколько слайдов показывать в карусели
            slidesToScroll: 1, // сколько слайдов прокручивать за раз
            dots: true,
            infinite: true,
            prevArrow: $('.js_slickPrev-product22'),
            nextArrow: $('.js_slickNext-product22'),
            rows: 1,
        });
        console.log($('.js_slickPrev-product22'));
    }
});