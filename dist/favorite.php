<?php
    include_once("static/header.php")
?>


<main>
    <section class="fav" id="fav">
        <div class="container">
        <!--  navigation block -->
             <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Список бажань</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
            <?php
                        include_once("static/popap_underhead.php");
                    ?>
                <div class="col-lg-12">
                    <h2 class="fav__title">
                    Список бажань
                    </h2>
                </div>
            </div>

            <div class="row">
            <div class="col-lg-3 profile__menu">
                <div class="profile__nav">
                        <h3 class="nav__title">
                        мій кабінет
                        </h3>

                        <nav>
                        <ul clacc="profile_nav__list">
                            <a href="profile.php"><li class="profile_nav__item nav__select">Особисті дані
                            <img class="profile_nav__arrow" src="images/chevron-down.svg" alt="">
                            </li></a>
                            <a href="orders.php"><li class="profile_nav__item">Мої замовлення 
                            <img class="profile_nav__arrow" src="images/chevron-down.svg" alt=""></li></a>
                            <a href="favorite.php"><li class="profile_nav__item">Список бажань 
                            <img class="profile_nav__arrow" src="images/chevron-down.svg" alt=""></li></a>
                        </ul>
                        </nav>
                    </div>
                </div>


                <div class="col-lg-9 filter_right">
                
                
                <!-- если товаров нет -->
                <h3 class="noHave__product hidden">
                    Нажаль, зараз у вас немає обраного товару.
                </h3>



                <div class="d-grid filter__content">
                        <!-- 1 -->
                        <div class="product js_unHover">

                        <div class="block"></div>



















                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->
<!-- <div class="product__favorite">
    <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5188 29.6052C14.9168 30.0033 15.4519 30.2251 16.0131 30.2251C16.5677 30.2251 17.1158 29.9968 17.5073 29.6052L29.2333 17.8793C31.0147 16.0979 31.9935 13.7292 32 11.217C32 8.69821 31.0212 6.32953 29.2398 4.54813C27.4584 2.76672 25.0962 1.78793 22.5775 1.78793C20.1044 1.78793 17.7749 2.7341 16.0065 4.45677C14.2316 2.72757 11.8956 1.77488 9.41599 1.77488C6.90375 1.77488 4.5416 2.75367 2.7602 4.52855C0.978793 6.30996 0 8.67864 0 11.1974C0 13.7096 0.985318 16.0783 2.76672 17.8597L14.5188 29.6052ZM3.8956 5.66395C5.37031 4.18924 7.33442 3.37358 9.42251 3.37358C11.5106 3.37358 13.4812 4.18924 14.9625 5.67048L15.4454 6.15335C15.5954 6.30343 15.7977 6.38826 16.0131 6.38826C16.2219 6.38826 16.4307 6.30343 16.5808 6.15335L17.0506 5.68353C18.5318 4.20229 20.4959 3.38663 22.5905 3.38663C24.6786 3.38663 26.6427 4.20229 28.1175 5.677C29.5987 7.15824 30.4078 9.12236 30.4078 11.2104C30.4078 13.2985 29.5922 15.2627 28.1109 16.7439L16.3785 28.4764C16.1892 28.6656 15.8434 28.6656 15.6476 28.4764L3.90212 16.7308C2.42088 15.2496 1.60522 13.2855 1.60522 11.1974C1.60522 9.10931 2.42088 7.14519 3.8956 5.66395Z"/>
        </svg>
        
        
</div> -->
<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>
<div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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
<!-- 2 -->
                        <div class="product js_unHover">

                               
                        <div class="block"></div>






                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->

<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>
    <div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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
                        
                        
                           


<!-- 3 -->






                                    <div class="product js_unHover">

                                

                                    <div class="block"></div>


                                <div class="absolute__block">
                <div class="product js_unHover">

<!-- absolute blocks -->

<div class="product__discount">
    <p>Акція</p>
</div>
<div class="product__name">
        <p>Антиоксиданти</p>
    </div>
    <div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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
                        
                        
                            




<!-- 4 -->
                        
                            <div class="product js_unHover">
                            <div class="block"></div>
                                





                                <div class="absolute__block">
                <div class="product js_unHover">

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

    <div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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
                        


                            <!-- 5 -->
                        
                            <div class="product js_unHover">

                                
                            <div class="block"></div>



                                <div class="absolute__block">
                <div class="product js_unHover">

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
    <div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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


<!-- 6 -->
                            <div class="product js_unHover">


                            <div class="block"></div>




<div class="absolute__block">
                <div class="product js_unHover">

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
    <div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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

<!-- 7 -->
<div class="product js_unHover">

                               
<div class="block"></div>


                                <div class="absolute__block">
                <div class="product js_unHover">

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
    <div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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




                            <!-- 8 -->
                            <div class="product js_unHover">

                            <div class="block"></div>







<div class="absolute__block">
                <div class="product js_unHover">

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
    <div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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
<!-- 9 -->
<div class="product js_unHover">
<div class="block"></div>
                              



                                <div class="absolute__block">
                <div class="product js_unHover">

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
<div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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
<!-- 10 -->
<div class="product js_unHover">
<div class="block"></div>
                                




                                <div class="absolute__block">
                <div class="product js_unHover">

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
<div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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
<!-- 11 -->
<div class="product js_unHover">
        <div class="block"></div>
                                




                                <div class="absolute__block">
                <div class="product js_unHover">

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
<div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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





<!-- 12 -->


                            <div class="product js_unHover">
        <div class="block"></div>
                                




                                <div class="absolute__block">
                <div class="product js_unHover">

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
<div class="product__close js_product-delete">
    <img src="images/close.svg" alt="закрити">
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














                    </div>  




                
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                <button class="category__more js_category-more d-flex">
                        показати ще товари

                        <img src="images/rotate-left.svg" alt="Показати ще">
                    </button>

                    <!-- если товаров нет -->
                    <button class="category__more js_category-more d-flex hidden">
                        Перейти до каталогу

                    </button>
                </div>
            </div>
        </div>
    </section>
</main>



<?php
    include_once("static/footer.php");
?>