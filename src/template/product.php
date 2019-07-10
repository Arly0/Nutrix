<?php
    include_once("static/header.php")
?>



<div class="modal hidden js_modal_callback">
    <img src="images/close.svg" alt="закрити" class="modal__close js_close">
    <h2 class="modal__title">
        Дякуємо за ваш відгук!
    </h2>

    <p class="modal__text">
        Він з'явиться на сайті одразу після 
        перевірки модератором.
    </p>
</div>


<div class="modal modal__thx hidden js_modal_thx">
    <img src="images/close.svg" alt="закрити" class="modal__close js_close">
    <h2 class="modal__title">
        Дякуємо за замовлення!
    </h2>

    <p class="modal__text">
        Наш менеджер зв'яжеться з Вами найближчим часом.
    </p>
</div>

<div class="modal__buy js_buy_modal hidden">
    <img src="images/close.svg" alt="закрити" class="modal__close js_close">
    <h2 class="buy__title">
        Замовлення в 1 клік
    </h2>
    <hr class="filter__line">

    <form action="file.php" method="post">
        <p class="modal__but-text">
        Номер телефона
        </p>

        <div class="d-flex">
            <input type="tel" name="phone" class="modal__field" required placeholder="+38(0__) ___-__-__">

            <input type="submit" value="замовити" name="modal__sbm" class="modal__sbm">
        </div>
    </form>

    <p class="modal__buy-desc">
        Замовити без оформлення. Просто залишити телефон 
        і консультант вирішить всі питання з оформлення замовлення.
    </p>
</div>

<main>
    <section class="prod" id="prod">
        <div class="container">
            <!--  navigation block -->
            <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Вітаміни і мінерали</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="category.php">Вітаміни</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="category.php">Вітамін A</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Turmeric Curcumin 1000 mg</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <?php
                    include_once("static/popap_underhead.php");
                ?>

                <div class="col-lg-7 section_margin">
                    <div class="prod__slider slick-prod">
                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>
                    </div>
                    <div class="showDesk">
                    <div class="slick__nav d-flex slick__shortNav">
                                <div class="svg-container js_slickPrev-product22">
                                <svg width="64" height="64" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#404040" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                </div>
                                <div class="svg-container js_slickNext-product22">
                                <svg width="64" height="64" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#404040" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                </div>
                            </div>
                            </div>
                </div>
                <div class="col-lg-5 section_margin">
                <div itemscope itemtype="http://schema.org/Product">
                    <h2 itemprop="name" class="prod__name">
                        Turmeric Curcumin 1000 mg
                    </h2>

                    <div itemprop="ratingValue" class="rate d-flex">
                        <div class="svg-container rate__star star__active">
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                            </svg>

                        </div>

                        <div class="svg-container rate__star star__active">
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                            </svg>

                        </div>

                        <div class="svg-container rate__star star__active">
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                            </svg>

                        </div>

                        <div class="svg-container rate__star star__active">
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                            </svg>

                        </div>

                        <div class="svg-container rate__star star__deactive">
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                            </svg>

                        </div>

                        <p itemprop="reviewCount" class="rate__text">
                        56 відгуків
                        </p>
                    </div>

                    <!-- <div class="prod__slider slick-prod showMob">
                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>

                        <div class="image-container"><img src="images/OcuviteEyeGummies(big).png" alt="Вітаміни" class="prod__product"></div>
                    </div> -->

                    <div class="timer">
                        <h4 class="timer__title">
                        Акція! Великі знижки на вітаміни А
                        </h4>
                        <div class="d-flex">
                            <p class="timer__days">
                                <span class="day">15</span> дні
                            </p>
                            <p class="timer__separate">:</p>
                            <p class="timer__days">
                                <span class="hour">13</span> год
                            </p>
                            <p class="timer__separate">:</p>
                            <p class="timer__days">
                               <span class="min">7</span> хв
                            </p>
                            <p class="timer__separate">:</p>
                            <p class="timer__days">
                                <span class="sec">23</span> сек
                            </p>
                        </div>
                    </div>

                    <div itemprop="description" class="char">
                        <h4 class="char__title">
                        Основні характеристики
                        </h4>

                        <div class="char__item d-flex">
                            <p class="char__subtitle">
                            Форма випуску
                            </p>

                            <p class="char__result">
                            Таблекти
                            </p>
                        </div>

                        <div class="char__item d-flex">
                            <p class="char__subtitle">
                            Кількість в упаковці
                            </p>

                            <p class="char__result">
                            60 шт.
                            </p>
                        </div>

                        <div class="char__item d-flex">
                            <p class="char__subtitle">
                            Бренд
                            </p>

                            <p class="char__result">
                            Universal Naturals
                            </p>
                        </div>

                        <div class="char__item d-flex">
                            <p class="char__subtitle">
                            Алергени
                            </p>

                            <p class="char__result">
                            Без горіхів і сої
                            </p>
                        </div>

                        <div class="char__item d-flex">
                            <p class="char__subtitle">
                            Країна-виробник
                            </p>

                            <p class="char__result">
                            Угорщина
                            </p>
                        </div>
                    </div>

                    <hr class="filter__line">


                    <div class="price d-flex">
                        <div class="old_price">
                            <p class="old_price__value">
                                <strike>317 грн</strike>
                            </p>
                        </div>
                        <div class="new_price">
                            <p itemprop="price" class="new_price__value">
                                285 грн
                            </p>
                            <meta itemprop="priceCurrency" content="UAH">
                        </div>
                    </div>

                    <div class="send d-flex">
                        <button type="submit" class="send__btn js_showBuyPopap">
                            купити
                        </button>

                        <div class="send__fav">
                            <img src="images/favorites.svg" alt="Favorite">
                        </div>
                    </div>

                    <div class="buy">
                        <p class="buy__title">
                        Купити в один клік
                        </p>
                        <form id="form1" method="post" action="send.php">
                        <div class="d-flex">
                            <input type="tel" name="phone" class="buy__field buy__phone js_validate" placeholder="+38(0__) ___-__-__" required>
                            <input type="submit" name="sbm" value="купити" class="buy__field buy__sbm">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <div class="desc">
                        <h3 class="desc__title">
                        Опис товару
                        </h3>
                        <hr class="filter__line">
                        <p class="desc__text">
                        Людям, які наполегливо тренуються, необхідний чистий і більш ефективний білок. Для максимізації зростання м'язової маси і процесу відновлення, а також гарантії засвоєння протеїну, дослідники MusclePharm посилили Combat Protein найрізноманітнішими протеїнами, які засвоюються з різною швидкістю, що дозволяє забезпечити безперебійне живлення м'язів протягом більш тривалого терміну. <br><br>
                        Ця смачна, легко змішується і засвоюється травленням суміш добре пристосована для продуктивного використання поживних речовин - це крок вперед в технології протеїнового порошку. Більшість інших білкових продуктів, як видається, забезпечують мінімально необхідну кількість поживних речовин. Але запитайте себе: прикладаєте ви на ваших тренуваннях мінімум зусиль? Вчені MusclePharm досягли успіху і в цьому. Формула Combat Protein Powder розроблена ретельно з використанням концентратів, гідролізатів і ізолятів сироваткового білка, яєчного альбуміну і міцелярного казеїну. <br><br>
                        Всі ці інгредієнти допомагають створити на довгий період часу грунт нарощування м'язової маси, що призводить до її швидкого зростання, відновлення і продуктивності.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="callback">
                    <div class="have__callback">
                        <div class="d-flex callback__head ">
                            <div class="d-flex head__text">
                                <p>
                                Відгуки покупців <span>36</span>
                                </p>
                            </div>

                            <button class="callback__leave hideTel js_switchForm">
                            залишити відгук
                            </button>
                        </div>

                        <hr class="filter__line ">

                        <div class="content ">
<!-- 1 -->
                            <div class="have_coment_comments hidden">
                            <div class="d-flex desc__info">
                                <p class="desc__info-name">
                                Андрій Пушак
                                </p>
                                <div class="rate-displ showDesk">
                                <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                                <p class="date">
                                25 травня 2019
                                </p>
                            </div>
                            <div class="rate-displ showMob">
                            <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                            <div class="comments">
                            <p>
                                Мені вдалося втратити більше 40 фунтів приблизно через 6-7 місяців, приймаючи цей продукт, підтримуючи правильну дієту і здійснюючи регулярно і послідовно.
                            </p>
                            </div>
</div>

<!-- 2 -->
<div class="have_coment_comments hidden">
                            <div class="d-flex desc__info">
                                <p class="desc__info-name">
                                Світлана Дереза
                                </p>
                                <div class="rate-displ showDesk">
                                <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                                <p class="date">
                                14 травня 2019
                                </p>
                            </div>

<div class="rate-displ showMob">
                            <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                            <div class="comments">
                            <p>
                            Чудовий продукт. Користуюсь вже давно.
                            </p>
                            </div>
                            </div>

<!-- 3 -->
<div class="have_coment_comments hidden">
                            <div class="d-flex desc__info">
                                <p class="desc__info-name">
                                Євгеній Січеслав
                                </p>
<div class="rate-displ showDesk">
                                <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                                <p class="date">
                                25 травня 2019
                                </p>
                            </div>
<div class="rate-displ showMob">
                            <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                            <div class="comments">
                            <p>
                            Це дійсно працює, будуючи м'язи і втрачаючи вагу. Це дає мені стільки енергії на роботі!
                            </p>
                            </div>

</div>
<!-- 4 -->
<div class="have_coment_comments hidden">
                            <div class="d-flex desc__info">
                                <p class="desc__info-name">
                                Андрій Пушак
                                </p>
                                <div class='rate-displ showDesk'>
                                <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                                <p class="date">
                                25 травня 2019
                                </p>
                            </div>
                            <div class="rate-displ showMob">
                            <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="comments">
                            <p>
                                Мені вдалося втратити більше 40 фунтів приблизно через 6-7 місяців, приймаючи цей продукт, підтримуючи правильну дієту і здійснюючи регулярно і послідовно.
                            </p>
                            </div>
</div>

<!-- 5 -->
<div class="have_coment_comments hidden">
                            <div class="d-flex desc__info">
                                <p class="desc__info-name">
                                Світлана Дереза
                                </p>
                                <div class="rate-displ showDesk">
                                <div class="rate d-flex ">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
                                </div>
                                <p class="date">
                                14 травня 2019
                                </p>
                            </div>
                            <div class="rate-displ showMob">
                            <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
                                </div>


                

                            <div class="comments">
                            <p>
                            Чудовий продукт. Користуюсь вже давно.
                            </p>
                            </div>
</div>

                            <!-- 6 -->
                            <div class="have_coment_comments hidden">
                            <div class="d-flex desc__info">
                                <p class="desc__info-name">
                                Світлана Дереза
                                </p>
                                <div class="rate-displ showDesk">
                                <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                                <p class="date">
                                14 травня 2019
                                </p>
                            </div>

<div class="rate-displ showMob">
                            <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                            <div class="comments">
                            <p>
                            Чудовий продукт. Користуюсь вже давно.
                            </p>
                            </div>
</div>  
                            <!-- 7 -->
                            <div class="have_coment_comments hidden">
                            <div class="d-flex desc__info">
                                <p class="desc__info-name">
                                Світлана Дереза
                                </p>
                                <div class="rate-displ showDesk">
                                <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                                <p class="date">
                                14 травня 2019
                                </p>
                            </div>

<div class="rate-displ showMob">
                            <div class="rate d-flex">
                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__active">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>

                                    <div class="svg-container rate__star star__deactive">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                        </svg>

                                    </div>
                                </div>
</div>
                            <div class="comments">
                            <p>
                            Чудовий продукт. Користуюсь вже давно.
                            </p>
                            </div>
                            </div>
                        </div>



                        <button class="conent__show js_showProduct">
                        дивитись всі відгуки 
                        </button> 

                        <input type="submit" name="sbm" value="залишити відгук" class="buy__field buy__sbm showtel buy__sbm_sec js_switchForm">
                        </div>
                        <form action="file.php" method="post">
                        <div class="callback__form js_callback__form hidden">
                            <h3 class="from__title">
                            Відгук про товар
                            </h3>

                            <p class="form__subtitle">
                            Прізвище та ім’я
                            </p>
                            <input type="text" name="fio" class="callback_form__filed" required >

                            <p class="form__subtitle">
                            Email
                            </p>
                            <input type="email" name="mail" class="callback_form__filed" required >

                            <p class="form__subtitle">
                            Комментар
                            </p>
                            <textarea name="comment" class="callback_form__filed"></textarea>

                            <p class="form__subtitle">
                            Оцінка
                            </p>

                            <input type="text" name="rating" class="hidden" id="">
                            <div class="rate d-flex">
                                <div class="svg-container rate__star star__active form__star_rate ">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                    </svg>

                                </div>

                                <div class="svg-container rate__star star__active form__star_rate ">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                    </svg>

                                </div>

                                <div class="svg-container rate__star star__active form__star_rate ">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                    </svg>

                                </div>

                                <div class="svg-container rate__star star__active form__star_rate ">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                    </svg>

                                </div>

                                <div class="svg-container star__active rate__star  form__star_rate js_rate-deactive">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99993 12.75L4.59143 15.4425L5.78993 10.4175L1.86743 7.0575L7.01618 6.645L8.99993 1.875L10.9837 6.645L16.1332 7.0575L12.2099 10.4175L13.4084 15.4425L8.99993 12.75Z" fill="none"/>
                                    </svg>

                                </div>
                            </div>

                            <input type="submit" name="sbm" value="залишити відгук" class="buy__field buy__sbm js_switchForm js_open_send">

                        </div>
                        </form>

                        <div class="callback_nohave hidden js_window-noCallback">
                        <div class="d-flex callback__head ">
                            <div class="d-flex head__text">
                                <p>
                                Відгуки покупців <span>0</span>
                                </p>
                            </div>

                            
                        </div>

                        <hr class="filter__line ">


                        <div class="edit">
                            <img src="images/edit.svg" alt="Редагувати" class="edit__pict">

                            <p class="edit__text">
                            У цього товару поки що немає відгуків. Будьте першим — залиште відгук!
                            </p>

                            <button class="edit__btn js_switchForm">
                            залишити відгук
                            </button>
                        </div>
                        </div>
                    </div>
                </div>

                
            </div>


            <div class="row">
                <div class="col-lg-12">

                    <h2 class="prod__title">
                    з цим товаром часто купують
                    </h2>
                <div class="slick-multiple-items">
                                <!-- 1 -->
                                <a href="product.php">
                            <div class="product">
                            
                                <!-- absolute blocks -->
                                <div class="product__favorite">
                                    <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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

                            </div></a>
                                <!-- 2 -->
                                <a href="product.php">
                            <div class="product">
                                    <!-- absolute blocks -->
                                    <div class="product__favorite">
                                        <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
                                            <img src="images/Kelkin_Product_VitaminsVitC-1.png" alt="California Gold Nutrition, Peruvian Maca">
                                        </div>
                                        <h4 class="product__title">
                                            California Gold Nutrition, Peruvian Maca
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
                                                <p>180 грн</p>
                                            </div>
                                            <div class="product__btn">
                                                <button>
                                                    купити
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </div></a>

                                <!-- 3 -->
                                <a href="product.php">
                            <div class="product">

                                        <!-- absolute blocks -->
                                        <div class="product__favorite">
                                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="product__top">
                                            <p>Топ продажів</p>
                                        </div>
        
        
                                        <div class="product__img">
                                            <div class="pict">                              
                                                <img src="images/vitamin-d2.png" alt="Optimum Nutrition, Амінокислотний комплекс">
                                            </div>
                                            <h4 class="product__title">
                                                    Optimum Nutrition, Амінокислотний комплекс
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
                                                    <p>305 грн</p>
                                                </div>
                                                <div class="product__btn">
                                                    <button>
                                                        купити
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
        
                            </div></a>

                                <!-- 4 -->
                                <a href="product.php">
                            <div class="product">

                                            <!-- absolute blocks -->
                                            <div class="product__favorite">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
                                                    <img src="images/OcuviteEyeGummies.png" alt="Source Naturals, По д'Арко">
                                                </div>  
                                                <h4 class="product__title">
                                                        Source Naturals, По д'Арко
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
                                                        <p>87 грн</p>
                                                    </div>
                                                    <div class="product__btn">
                                                        <button>
                                                            купити
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
            
                            </div></a>

                               <!-- 5 -->
                               <a href="product.php">
                               <div class="product">

                                    <!-- absolute blocks -->
                                    <div class="product__favorite">
                                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
                                            <img src="images/OcuviteEyeGummies.png" alt="Source Naturals, По д'Арко">
                                        </div>  
                                        <h4 class="product__title">
                                                Source Naturals, По д'Арко
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
                                                <p>87 грн</p>
                                            </div>
                                            <div class="product__btn">
                                                <button>
                                                    купити
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    
                                </div></a>
                    
                        </div>

                        <div class="slick__nav slick__buy_more d-flex hideTel">
                                <div class="svg-container js_slickPrev-product">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32 13.3333L13.3333 31.9999L32 50.6666M50.6667 31.9999H16H50.6667Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                </div>
                                <div class="svg-container js_slickNext-product">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32 13.3333L13.3333 31.9999L32 50.6666M50.6667 31.9999H16H50.6667Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                </div>
                            </div>


                            <div class="js_unhover">
                            <hr class="half_line">


                            <div class="prod__description">
                                <p>
                                    Але при деяких обставинах – або на вимогу боргу, або в силу якоїсь необхідності часто доводиться забувати про насолоди і не втікати від тягарів. Але при деяких обставинах – або на вимогу боргу, або в силу якоїсь необхідності часто доводиться забувати про насолоди і не втікати від тягарів. Втім, тут дуже легко і просто провести відміннос. <br><br>
                                    Але щоб ви зрозуміли, звідки виникає це хибне уявлення людей, цуратись насолоди і вихваляти страждання, я розкрию перед вами всю картину і роз’ясню, що саме говорив цей чоловік, який відкрив істину, якого я б назвав зодчим щасливого життя.
                                </p>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
</main>




<?php
    include_once("static/footer.php");
?>