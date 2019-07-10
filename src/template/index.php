<?php
    include_once("static/header.php")
?>
    <!-- menu section -->
   

    <main>
        <section class="slider" id="slider">
            <div class="container">
                <div class="row">

                        <?php
                        include_once("static/popap_underhead.php");
                        ?>

                    <div class="col-lg-6">
                        <h1 class="slider__title">
                            Весняний розпродаж
                        </h1>

                        <p class="slider__desc">
                            Купуйте акційні товари та отримайте безкоштовну доставку вашого замовлення кур'єром
                        </p>

                        <div class="slider__btn">
                            <a href="#" class="slider__more-link">
                                детальніше
                            </a>
                        </div>
                        
                        <div class="d-flex slider__nav">
                            <div class="slider__ellipse slider__elipse-active transition"></div>
                            <div class="slider__ellipse transition"></div>
                            <div class="slider__ellipse transition"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="best" id="best">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 best__recomend d-grid">
                        <div class="best__block d-flex">
                            <div class="d-flex">
                                <img src="images/certificate.svg" alt="Сертификат">
                                <p>Тільки сертифікована продукція <br>    
                                    від офіційного виробника</p>
                            </div>
                        </div>

                        <div class="best__block d-flex">
                            <div class="d-flex">
                                <img src="images/cursor.svg" alt="Сертификат">
                                <p>Безкоштовна доставка при <br> замовленні на суму понад 1000 грн</p>
                            </div>
                        </div>

                        <div class="best__block d-flex">
                            <div class="d-flex">
                                <img src="images/delivery-truck.svg" alt="Сертификат">
                                <p>Купівля в один клік</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="best__title">
                                найкраща пропозиція
                        </h2>

                        <div class="slick-multiple-items">
                                <!-- 1 -->
                                <a class="product__link" href="product.php">
                            <div class="product js_product">

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
                                <a class="product__link" href="product.php">
                            <div class="product js_product">
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
                                <a class="product__link" href="product.php">
                            <div class="product js_product">

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
                                <a class="product__link" href="product.php">
                            <div class="product js_product">

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
                               <a class="product__link" href="product.php">
                               <div class="product js_product">

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

                        <div class="slick__nav d-flex hideTel">
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

                        

                    </div>
                </div>
            </div>
        </section>

        <section class="complex js_unhover" id="complex">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="complex__title">
                                комплекси для
                        </h2>
                    </div>
                    <div class="col-lg-12">
                        <div>
                        <div class="d-grid complex__list">
                            <div class="complex__first">
                                <div class="complex__block">
                                    <div class="complex__greenBack"></div>
                                    <div class="complex__div-text">
                                        <p>здоров’я</p>
                                        <p>органів</p>
                                    </div>
                                </div>

                                <div class="complex__desc">
                                    <ul class="complex__list">
                                        <li class="comples__item">Серце</li>
                                        <li class="comples__item">Мозок</li>
                                        <li class="comples__item">Печінка</li>
                                        <li class="comples__item">Жовчний міхур</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="complex__second">
                                <div class="complex__block">
                                        <div class="complex__greenBack"></div>
                                        <div class="complex__div-text">
                                            <p>підтримка</p>
                                            <p>систем</p>
                                        </div>
                                </div>
                                
                                <div class="complex__desc">
                                        <ul class="complex__list">
                                            <li class="comples__item">Опорно-рухова система</li>
                                            <li class="comples__item">Імунна система</li>
                                            <li class="comples__item">Травна система</li>
                                            <li class="comples__item">Нервова система</li>
                                        </ul>
                                    </div>
                            </div>
                            
                            <div class="complex__third">
                                <div class="complex__block">
                                        <div class="complex__greenBack"></div>
                                        <div class="complex__div-text">
                                            <p>процес</p>
                                            <p>відновлення</p>
                                        </div>
                                </div>

                                <div class="complex__desc">
                                        <ul class="complex__list">
                                            <li class="comples__item">Молодість і краса</li>
                                            <li class="comples__item">Антистрес</li>
                                            <li class="comples__item">Здоровий сон</li>
                                            <li class="comples__item">Схуднення</li>
                                        </ul>
                                    </div>
                            </div>

                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="subscribe" id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div>
                            <p class="subscribe__text">
                                Підпишіться на розсилку, щоб бути в курсі 
                                останніх новин
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-1"></div>

                    <div class="col-lg-7">
                        <div class="">
                            <form id="form1" class="subscribe__form d-flex" action="file.php" method="post">
                                <input type="email" required placeholder="Ваш Email" class="subscribe__field js_validate" name="mail">
                                <input type="submit" name="sbm" class="subscribe__sbm" value="відправити">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="company" id="company">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="company__list slick-company-list">
                            <!-- 1 -->
                            <div class="company__item">
                                <img src="images/dark-logo8.svg" alt="flower">
                            </div>
                            <!-- 2 -->
                            <div class="company__item">
                                <img src="images/dark-logo7.svg" alt="beauty">
                            </div>
                            <!-- 3 -->
                            <div class="company__item">
                                <img src="images/dark-logo4.svg" alt="organica">
                            </div>
                            <!-- 4 -->
                            <div class="company__item">
                                <img src="images/dark-logo3.svg" alt="aura">
                            </div>
                            <!-- 5 -->
                            <div class="company__item">
                                <img src="images/dark-logo2.svg" alt="altura">
                            </div>
                            <!-- 6 -->
                            <div class="company__item">
                                    <img src="images/dark-logo2.svg" alt="altura">
                                </div>
                        </div>

                        <div class="slick__nav d-flex hideTel">
                                <div class="svg-container js_slickPrev-company">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32 13.3333L13.3333 31.9999L32 50.6666M50.6667 31.9999H16H50.6667Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                </div>
                                <div class="svg-container js_slickNext-company">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32 13.3333L13.3333 31.9999L32 50.6666M50.6667 31.9999H16H50.6667Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="news" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <h2 class="news__title">
                            останні новини
                        </h2>

                        <div class="d-grid news__content">

                            <div class="news__item news__first">

                                <a href="blog.php"><div class="news__pict"></div></a>

                                <a href="blog.php"><h4 class="news__conent-title">
                                        5 хвилин розминки, щоб отримати максимальну 
                                        віддачу від тренування
                                </h4></a>

                                <a href="blog.php"><p class="news__desc">
                                        Як ви готуєтеся до тренування так само важливо, як і сама тренування ...
                                </p></a>
                                <div class="center">
                                <a href="blog.php"><button class="js-go-toPage news__btn">
                                            детальніше
                                    </button></a>
                                </div>

                            </div>

                            <div class="news__item news__second">

                            <a href="blog.php"><div class="news__pict"></div></a>
    
                            <a href="blog.php"><h4 class="news__conent-title">
                                            Переваги вітаміну К
                                            (Крім того, як отримати 
                                            більше у своєму раціоні)
                                    </h4></a>
    
                                    <a href="blog.php"><p class="news__desc">
                                            Як ви готуєтеся до тренування так само важливо, як і сама тренування ...
                                    </p></a>
                                    <div class="center">
                                    <a href="blog.php"><button class="js-go-toPage news__btn">
                                                детальніше
                                        </button></a>
                                    </div>
    
                                </div>

                        </div>

                        

                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">

                            <hr class="news__line">

                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-2"></div>

                    <div class="col-lg-8">
                        <p class="news__text">
                                Але при деяких обставинах – або на вимогу боргу, або в силу якоїсь необхідності часто доводиться забувати про насолоди і не втікати від тягарів. Але при деяких обставинах – або на вимогу боргу, або в силу якоїсь необхідності часто доводиться забувати про насолоди і не втікати від тягарів. Втім, тут дуже легко і просто провести відміннос
                                .  <br><br>
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
    