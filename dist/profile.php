<?php
    include_once("static/header.php")
?>




<main>
    <section class="profile" id="profile">
        <div class="container">
        <!--  navigation block -->
             <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Особисті дані</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <?php
                    include_once("static/popap_underhead.php");
                ?>
                <div class="col-lg-12">
                    <h2 class="profile__title">
                    Особисті дані
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

                <div class="col-lg-9">
                <form action="file.php" method="post">
                    <h3 class="profile__subtitle">
                    Контактна інформація
                    </h3>

                    <div class="d-grid profile__contents">
                        <div class="content">
                            <p>
                                Прізвище та ім’я
                            </p>
                            <input type="text" name="name" class="" required>
                        </div>

                        <div class="content">
                            <p>
                            Телефон
                            </p>
                            <input type="tel" name="phone" class="" required>
                        </div>

                        <div class="content">
                            <p>
                                Email
                            </p>
                            <input type="email" name="email" class="" required>
                        </div>
                    </div>

                    <h3 class="profile__subtitle">
                    Зміна паролю
                    </h3>

                    <div class="d-grid profile__contents">
                        <div class="content">
                            <p>
                            Новий пароль
                            </p>
                            <input type="password" name="pass" class="" required>
                        </div>

                        <div class="content">
                            <p>
                            Підтвердити новий пароль
                            </p>
                            <input type="password" name="passRepeat" class="" required>
                        </div>
                    </div>


                    <h3 class="profile__subtitle">
                    Зміна паролю
                    </h3>

                    <div class="check__radio d-flex js_radio-a">
                        <label>
                        <div class="radio_custom">
                        <div class="active"></div>
                        </div>
                        <input checked type="radio" name="take" value="np" class="hidden">
                        </label>
                        
                        <p>Нова Пошта</p>
                    </div>

                    <div class="d-grid profile__contents">
                        <div class="content">
                            <p>
                            Місто
                            </p>
                            <div class="d-flex"><input type="text" name="city" class="" value="Кам'янець-Подільський - Хмельницький" required>
                            <img src="images/chevron-down.svg" alt="" class="arrow_toDown"></div>
                        </div>

                        <div class="content">
                            <p>
                            Відділення
                            </p>
                            <div class="d-flex"><input type="text" name="otdel" value="Відділення №5, вул. Лесі Українки, б. 39/2" class="" required>
                            <img src="images/chevron-down.svg" alt="" class="arrow_toDown"></div>
                        </div>

                        
                    </div>

                    <div class="check__radio d-flex js_radio-a">
                        <label>
                        <div class="radio_custom">
                        <div class=""></div>
                        </div>
                        <input type="radio" name="take" value="city" class="hidden">
                        </label>
                        
                        <p>Кур’єром по Львову</p>
                    </div>

                    <div class="d-grid profile__contents">
                        <div class="content">
                            <p>
                            Адреса
                            </p>
                            <input type="text" name="adress" class="" value="" required>
                        </div>
                        
                    </div>


                    <div class="check__radio d-flex js_radio-a">
                        <label>
                        <div class="radio_custom">
                        <div class=""></div>
                        </div>
                        <input type="radio" name="take" value="shop" class="hidden">
                        </label>
                        
                        <p>Самовивіз із магазину</p>
                    </div>

                    <div class="check__adress-shop">
                        <a href="https://google.com">Адреса магазину: м. Львів, вул. Зелена 41</a>
                    </div>

                    <h3 class="profile__subtitle">
                    Спосіб оплати
                    </h3>

                    <div class="check__radio d-flex js_radio-b">
                        <label>
                        <div class="radio_custom">
                        <div class="active"></div>
                        </div>
                        <input checked type="radio" name="money" value="cash" class="hidden">
                        </label>
                        
                        <p>Готівкою</p>
                    </div>

                    <div class="check__radio d-flex js_radio-b">
                        <label>
                        <div class="radio_custom">
                        <div class=""></div>
                        </div>
                        <input type="radio" name="money" value="card" class="hidden">
                        </label>
                        
                        <p>Онлайн карткою Visa/MasterCard</p>
                    </div>

                    <button type="submit" class="check__sbm">
                    зберегти зміни
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>



<?php
    include_once("static/footer.php");
?>