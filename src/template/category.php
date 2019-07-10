<?php
    include_once("static/header.php")
?>

<div class="filtr__telephone showTel hidden">
                <div class="filter">
                <div class="d-flex">
                <div class="filer__back js_close_filtr d-flex">
                        <div class="svg_container">
                            <svg width="20" height="20" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 13.3333L13.3333 31.9999L32 50.6666M50.6667 31.9999H16H50.6667Z" stroke="#727777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>

                        <p>
                            Назад
                        </p>
                    </div>

                    

                    <h3 class="filter__tel-title">
                        Фільтр
                    </h3>
                </div>
                    


                    <hr>
                    <div class="filter__price">
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                                Ціна
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>
                        <form action="file.php" method="post">
                        <div class="d-flex form__item js_hide">
                            <input type="number" name="minPrice" class="price__field" value="500">

                            <p class="price__separator"> - </p>

                            <input type="number" name="maxPrice" class="price__field" value="12000">

                            <p class="price__curr">
                                грн
                            </p>

                            <input type="submit" value="OK" class="price__sbm" name="sbmPrice">
                        </div>
                        </form>

                        <div class="form__item js_hide js_slider-range" id=""></div>
                    </div>

                    <hr class="filter__line">

                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Форма випуску
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Таблетки <span>(4)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>

                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Гелеві капсули <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Порошок <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Рідина <span>(3)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Спрей <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Жувальні таблетки <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                        </div>

                    </div>



                    <hr class="filter__line">


                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Кількість в упаковці
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="" >
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    до 50 <span>(4)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    50 — 99 <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    100 — 199 <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    200 — 299 <span>(13)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                    
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    300+ <span>(10)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                    
                                </label>
                               
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    до 50 мл <span>(9)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    50 — 100 мл <span>(12)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    100 — 199 мл <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    200 — 299 мл <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    300 — 499 мл <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                           
                            <div class="form__more js_moreHide d-flex">
                                <img src="images/chevron-down.svg" alt="Показати більше">

                                <p>
                                Дивитись ще
                                </p>
                            </div>

                        </div>

                    </div>




                    <hr class="filter__line">



                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Бренди
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="" >
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    NOW <span>(4)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Nordic Naturals <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Olimp <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Dymatize <span>(13)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    El granero <span>(10)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Optimum Nutrition <span>(9)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Form Labs <span>(12)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    GNC <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Universal Naturals <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Scitec <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                           
                            <div class="form__more js_moreHide d-flex">
                                <img src="images/chevron-down.svg" alt="Показати більше">

                                <p>
                                Дивитись ще
                                </p>
                            </div>

                        </div>

                    </div>




                    <hr class="filter__line">

                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Алергени
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="" >
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без глютену <span>(4)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                    
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без лактози <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без ГМО <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без цукру <span>(3)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без горіхів і сої <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Для веганів <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Органічна продукція <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                           

                        </div>

                    </div>




                    <hr class="filter__line">


                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Країна-виробник
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="" >
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    США <span>(4)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Німеччина <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Іспанія <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Угорщина <span>(3)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Польща <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Україна <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            

                        </div>

                    </div>
                    <div class="d-flex filter__btns">
                    <input type="submit" value="Показати" name="select" class='form__reset' >

                    <input type="submit" value="Скасувати" name="reset" class='form__reset js_disable_checkboxes' >
                    </div>
                </div>
</div>
<main>
    <section class="category" id="category">
        <div class="container">
         <!--  navigation block -->
         <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Вітаміни і мінерали</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Вітаміни</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Вітамін А</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <?php
                    include_once("static/popap_underhead.php");
                ?>

                <div class="col-lg-3 filter hideTel">
                    <div class="filter__price">
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                                Ціна
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="d-flex form__item js_hide">
                            <input type="number" name="minPrice" class="price__field" value="500">

                            <p class="price__separator"> - </p>

                            <input type="number" name="maxPrice" class="price__field" value="12000">

                            <p class="price__curr">
                                грн
                            </p>

                            <input type="submit" value="OK" class="price__sbm" name="sbmPrice">
                        </div>

                        <div class="form__item js_hide js_slider-range" id=""></div>
                    </div>

                    <hr class="filter__line">

                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Форма випуску
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Таблетки <span>(4)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>

                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Гелеві капсули <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Порошок <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Рідина <span>(3)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Спрей <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Жувальні таблетки <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                        </div>

                    </div>



                    <hr class="filter__line">


                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Кількість в упаковці
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="" >
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    до 50 <span>(4)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    50 — 99 <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    100 — 199 <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    200 — 299 <span>(13)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                    
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    300+ <span>(10)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                    
                                </label>
                               
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    до 50 мл <span>(9)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    50 — 100 мл <span>(12)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    100 — 199 мл <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    200 — 299 мл <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    300 — 499 мл <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                           
                            <div class="form__more js_moreHide d-flex">
                                <img src="images/chevron-down.svg" alt="Показати більше">

                                <p>
                                Дивитись ще
                                </p>
                            </div>

                        </div>

                    </div>




                    <hr class="filter__line">



                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Бренди
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    NOW <span>(4)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Nordic Naturals <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Olimp <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Dymatize <span>(13)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    El granero <span>(10)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Optimum Nutrition <span>(9)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Form Labs <span>(12)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    GNC <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Universal Naturals <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Scitec <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                           
                            <div class="form__more js_moreHide d-flex">
                                <img src="images/chevron-down.svg" alt="Показати більше">

                                <p>
                                Дивитись ще
                                </p>
                            </div>

                        </div>

                    </div>




                    <hr class="filter__line">

                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Алергени
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="" >
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без глютену <span>(4)</span>
                                    </p>
                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                    
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без лактози <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без ГМО <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без цукру <span>(3)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Без горіхів і сої <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Для веганів <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Органічна продукція <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                           

                        </div>

                    </div>




                    <hr class="filter__line">


                    <div class="filter__form">
                    
                        <div class="d-flex filter__title">
                            <p class="price__text filter__text">
                            Країна-виробник
                            </p>

                            <img src="images/plus.svg" alt="Звернути" class="price__minus filter__expand js_iconPlusMinus">
                        </div>

                        <div class="form">


                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="" >
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    США <span>(4)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Німеччина <span>(1)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Іспанія <span>(11)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Угорщина <span>(3)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Польща <span>(7)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                                
                            </div>
                            
                            <div class="d-flex form__item js_hide">
                                <label class='d-flex'>
                                    <input type="checkbox" name="foo" class="hidden js_watch" id="">
                                    <img src="images/unchecked.svg" alt="check" class="form__checkbox js_checkbox">
                                    <p class="form__name">
                                    Україна <span>(20)</span>
                                    </p>

                                    <img src="images/x-circle.svg" alt="Закрыть" class="form__x js_close hidden">
                                </label>
                               
                            </div>

                            

                        </div>

                    </div>


                    <input type="submit" value="Скасувати всі фільтри" name="reset" class='form__reset js_disable_checkboxes' >
                </div>
 
                <div class="col-lg-9 filter_right">
                    <h2 class="filter__title">
                    Вітамін А
                    </h2>
                    <div class="filter__dropDown">
                        <div class="d-flex filter__sort">
                            <p class="sort hideTel">
                            Сортування
                            </p>

                            <div class="sort__head js_open_sort showtel">
                                Фільтр
                            </div>

                            <div class="sort__container js_dropDown d-flex">
                                <p>
                                За рейтингом
                                </p>

                                <img src="images/chevron-down.svg" alt="Відкрити список">
                            </div>
                        </div> <br>
                       
                        <div class="dropDown__list hidden js_show-dropDown">
                            <p class="dropDown__item js_dropDown-item">
                                За актуальністю
                            </p>

                            <p class="dropDown__item js_dropDown-item">
                                За ціною
                            </p>

                            <p class="dropDown__item js_dropDown-item">
                                За рейтингом
                            </p>

                            <p class="dropDown__item js_dropDown-item">
                                За популярністю
                            </p>
                        </div>
                    </div>
                    <div class="d-grid filter__content">
                        <!-- 1 -->
                        <a href="product.php">
                        <div class="product js_unHover">

                        <div class="block"></div>



















                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>


                            </div></a>
<!-- 2 -->
<a href="product.php">
                        <div class="product js_unHover">

                               
                        <div class="block"></div>






                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>










                            </div>
                        </a>
                        
                           


<!-- 3 -->




<a href="product.php">

                                    <div class="product js_unHover">

                                

                                    <div class="block"></div>


                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>










                            </div>
                        
                        
                            

</a>


<!-- 4 -->
<a href="product.php">
                            <div class="product js_unHover">
                            <div class="block"></div>
                                





                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>











                            </div></a>
                        


                            <!-- 5 -->
                            <a href="product.php">
                            <div class="product js_unHover">

                                
                            <div class="block"></div>



                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>











                            </div></a>


<!-- 6 -->
<a href="product.php">
                            <div class="product js_unHover">


                            <div class="block"></div>




<div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>








</div></a>

<!-- 7 -->
<a href="product.php">
<div class="product js_unHover">

                               
<div class="block"></div>


                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>












                            </div></a>




                            <!-- 8 -->
                            <a href="product.php">
                            <div class="product js_unHover">

                            <div class="block"></div>







<div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>











</div></a>
<!-- 9 -->
<a href="product.php">
<div class="product js_unHover">
<div class="block"></div>
                              



                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>











                            </div></a>
<!-- 10 -->
<a href="product.php">
<div class="product hidden js_unHover">
<div class="block"></div>
                                




                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>











                            </div></a>
<!-- 11 -->
<a href="product.php">
<div class="product hidden js_unHover">
        <div class="block"></div>
                                




                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<div class="product__favorite">
    <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        <!-- add hover effect -->
</div>
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>


<div class="product__img">
    <div class="pict">                           
        <img src="images/OptiVitamins-120caps.png" alt="Turmeric Curcumin 1000 mg">
    </div>
    <h4 class="product__title">
            Turmeric Curcumin 1000 mg
    </h4>

    <div class="product__desc">
        <ul>
            <li class="product__item">
                    <span>Форма випуску:</span> жувальні табл.
            </li>
            <li class="product__item">
                    <span>Кількість в упаковці:</span> 100 
            </li>
            <li class="product__item">
                    <span>Бренд:</span> Universal Naturals
            </li>
            <li class="product__item">
                    <span>Алергени:</span> Без горіхів і сої
                    , без лактози та фруктози
            </li>
            <li class="product__item">
                    <span>Країна-виробник:</span> Україна
            </li>
        </ul>
    </div>

    

    <div class="product__buy d-flex">
        <div class="product__price">
                <div class="d-flex product__rait">
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-active" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                        <div class="svg-container">
                                <svg class="star-disable" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="#DFE9E8"/>
                                    </svg>                                                    
                        </div>
                    </div>
            <span class="hidden">305 грн</span>
            <p>274 грн</p>
        </div>
        <div class="product__btn">
            <button>
                купити
            </button>
        </div>
    </div>
</div>

</div>
                </div>







                            </div> </a>






                    </div>        
                       

                    <hr class="filter__line">

                </div>

                




                
            </div>

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <button class="category__more js_category-more d-flex">
                        показати ще товари

                        <div class="svg-container">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.66 15.57C3.47441 17.6981 4.99118 19.4842 6.9592 20.6327C8.92721 21.7812 11.2284 22.2232 13.4819 21.8854C15.7353 21.5476 17.8058 20.4503 19.3506 18.7753C20.8954 17.1002 21.8218 14.9478 21.9764 12.6745C22.131 10.4011 21.5046 8.1431 20.2009 6.2743C18.8972 4.4055 16.9943 3.03799 14.8074 2.39817C12.6204 1.75835 10.2806 1.8846 8.17516 2.75601C6.06975 3.62743 4.32508 5.19175 3.23 7.18998M2.5 1.99998V7.99998H8.5L2.5 1.99998Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        </div>
                    </button>

                    <p class="category__desc">
                        Але при деяких обставинах – або на вимогу боргу, або в силу якоїсь необхідності часто доводиться забувати про насолоди і не втікати від тягарів. Але при деяких обставинах – або на вимогу боргу, або в силу якоїсь необхідності часто доводиться забувати про насолоди і не втікати від тягарів. Втім, тут дуже легко і просто провести відміннос. <br><br>
                        Але щоб ви зрозуміли, звідки виникає це хибне уявлення людей, цуратись насолоди і вихваляти страждання, я розкрию перед вами всю картину і роз’ясню, що саме говорив цей чоловік, який відкрив істину, якого я б назвав зодчим щасливого життя.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
    include_once("static/footer.php");
?>