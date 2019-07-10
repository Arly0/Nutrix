<?php
    include_once("static/header.php")
?>


<main>
    <section class="blog" id="blog">   
        <div class="container">
         <!--  navigation block -->
         <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Блог</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <?php
                    include_once("static/popap_underhead.php");
                ?>

                <div class="col-lg-12">
                    <h2 class="blog__title">
                        Блог
                    </h2>
                </div>

                <div class="col-lg-3">
                    <div class="blog__left-content">
                        <nav>
                            <ul class="blog__nav">
                                <li class="blog__nav-item d-flex">Здоров'я 
                                <div class="svg-container">
                                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 10L12 6" stroke="#31ADA5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                </li>
                                <li class="blog__nav-item d-flex">Їжа
                                <div class="svg-container">
                                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 10L12 6" stroke="#31ADA5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                </li>
                                <li class="blog__nav-item d-flex">Спорт
                                <div class="svg-container">
                                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 10L12 6" stroke="#31ADA5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                </li>
                                <li class="blog__nav-item d-flex">Харчування
                                <div class="svg-container">
                                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 10L12 6" stroke="#31ADA5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                </li>
                                <li class="blog__nav-item d-flex">Продуктивність
                                <div class="svg-container">
                                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 10L12 6" stroke="#31ADA5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="d-grid blog__card">

                    <!-- 1 -->
                        <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    23 травня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    91
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Користь для здоров'я гарбуза
                                    і насіння гарбуза
                                </p>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    18 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    12
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Білкові млинці, щоб відсвяткувати національний день млинця
                                </p>
                            </div>
                        </div>

                         <!-- 3 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    18 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    78
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Перевтома? Потрібні способи розслабитися? Поради уважності
                                </p>
                            </div>
                        </div>

                         <!-- 4 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    14 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    100
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Біотин & Желатин для здорової шкіри, нігтів і волосся
                                </p>
                            </div>
                        </div>

                         <!-- 5 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    9 лютого 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    24
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Як отримати більше кальцію 
                                    у вашій дієті)
                                </p>
                            </div>
                        </div>

                         <!-- 6 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    25 травня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    106
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Відкрийте для себе чарівну ягоду Амазонки: Acai
                                </p>
                            </div>
                        </div>

                         <!-- 7 -->
                        <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    23 травня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    91
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Користь для здоров'я гарбуза
                                    і насіння гарбуза
                                </p>
                            </div>
                        </div>

                        <!-- 8 -->
                        <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    18 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    12
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Білкові млинці, щоб відсвяткувати національний день млинця
                                </p>
                            </div>
                        </div>

                         <!-- 9 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    18 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    78
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Перевтома? Потрібні способи розслабитися? Поради уважності
                                </p>
                            </div>
                        </div>

                         <!-- 10 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    14 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    100
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Біотин & Желатин для здорової шкіри, нігтів і волосся
                                </p>
                            </div>
                        </div>

                         <!-- 11 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    9 лютого 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    24
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Як отримати більше кальцію 
                                    у вашій дієті)
                                </p>
                            </div>
                        </div>

                         <!-- 12 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    25 травня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    106
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Відкрийте для себе чарівну ягоду Амазонки: Acai
                                </p>
                            </div>
                        </div>

                        <!-- 13 -->
                        <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    23 травня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    91
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Користь для здоров'я гарбуза
                                    і насіння гарбуза
                                </p>
                            </div>
                        </div>

                        <!-- 14 -->
                        <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    18 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    12
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Білкові млинці, щоб відсвяткувати національний день млинця
                                </p>
                            </div>
                        </div>

                         <!-- 15 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    18 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    78
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Перевтома? Потрібні способи розслабитися? Поради уважності
                                </p>
                            </div>
                        </div>

                         <!-- 16 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    14 березня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    100
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Біотин & Желатин для здорової шкіри, нігтів і волосся
                                </p>
                            </div>
                        </div>

                         <!-- 17 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    9 лютого 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    24
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Як отримати більше кальцію 
                                    у вашій дієті)
                                </p>
                            </div>
                        </div>

                         <!-- 18 -->
                         <div class="card">
                            <div class="card__type">
                                Здоров'я
                            </div>

                            <div class="card__pict">
                            </div>

                            <div class="card__popular d-flex">
                                <p>
                                    25 травня 2019
                                </p>

                                <div class="svg-container">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.666687 8.00002C0.666687 8.00002 3.33335 2.66669 8.00002 2.66669C12.6667 2.66669 15.3334 8.00002 15.3334 8.00002C15.3334 8.00002 12.6667 13.3334 8.00002 13.3334C3.33335 13.3334 0.666687 8.00002 0.666687 8.00002Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" stroke="#727777" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <span>
                                    106
                                </span>
                            </div>

                            <div class="card__desc">
                                <p>
                                    Відкрийте для себе чарівну ягоду Амазонки: Acai
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <hr class="blog__underline">
                    
                    <nav class="blog__pages">
                        <ul class="d-flex">
                            <li class="pages__item"><a href="prevPage.php">1</a></li>
                            <li class="pages__item pages__item-active"><a href="#">2</a></li>
                            <li class="pages__item"><a href="nextPage.php">3</a></li>
                            <li class="pages__item">...</li>
                            <li class="pages__item"><a href="lastPage.php">6</a></li>
                            <li class="pages__item"><a href="nextPage.php">
                            <div class="svg-container">
                            <svg width="32" height="32" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6L8 10L12 6" stroke="#404040" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </div>
                            </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
    include_once("static/footer.php");
?>