<?php
    include_once("static/header.php")
?>



<main>
    <section class="check" id="check">
    <form action="send.php" id="form1" method="post">
        <div class="container">
            <!--  navigation block -->
             <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Оформлення замовлення</a></li>
                    </ul>
                </div>
            </div>      

            <div class="row">
                <?php
                    include_once("static/popap_underhead.php");
                ?>

                <div class="col-lg-12">
                    <h2 class="check__title">
                    Оформлення замовлення
                    </h2>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6">
                
                    <div class="d-flex check__subtitle">
                        <p class="num">
                        1
                        </p>
                        <h3>
                        Контактна інформація
                        </h3>
                    </div>

                    <div class="check__login">
                        <p>Є акаунт? - <a href="login.php">Авторизуйтесь</a></p>
                    </div>

                    <div class="check__line d-flex">
                        <p>
                            Прізвище та ім’я
                        </p>

                        <input type="text" name="name" class="js_validate" required >
                    </div>

                    <div class="check__line d-flex">
                        <p>
                        Телефон
                        </p>

                        <input type="tel" name="phone" class="js_validate" placeholder="+38 (0ХХ)-ХХХ-ХХ-ХХ" required >
                    </div>

                    <div class="check__line d-flex">
                        <p>
                            E-mail
                        </p>

                        <input type="email" name="email" class="js_validate" required >
                    </div>

                    <div class="d-flex check__subtitle">
                        <p class="num">
                        2
                        </p>
                        <h3>
                        Спосіб доставки
                        </h3>
                    </div>

                    <div class="check__radio d-flex js_radio-a">
                        <label>
                        <div class="radio_custom">
                        <div class="active"></div>
                        </div>
                        <input checked type="radio" name="take" value="np" class="hidden">
                        </label>
                        
                        <p>Нова Пошта</p>
                    </div>

                    <div class="check__line d-flex">
                        <p>
                            Місто
                        </p>

                        <div class="d-flex"><input type="text" name="city" class="js_validate" value="Кам'янець-Подільський - Хмельницька обл." required ><img src="images/chevron-down.svg" alt="" class="arrow_toDown"></div>
                    </div>

                    <div class="check__line d-flex">
                        <p>
                            Відділення
                        </p>

                        <div class="d-flex"><input type="text" name="otdel" value="Відділення №5, вул. Лесі Українки, б. 39/2" class="js_validate" required ><img src="images/chevron-down.svg" alt="" class="arrow_toDown"></div>
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

                    <div class="check__line d-flex">
                        <p>
                            Адреса
                        </p>

                        <input type="text" name="adress" value="" class="js_validate" required >
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

                    <div class="d-flex check__subtitle">
                        <p class="num">
                        3
                        </p>
                        <h3>
                        Спосіб оплати
                        </h3>
                    </div>

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


                    <div class="promo showtel">
                    <div class="check__line">
                            <p class="promo__quest">
                            У мене є промокод на знижку
                            </p>

                            

                                <form id="promo" method="post" action="file.php">
                                    
                                        <input type="text" name="promo" class="promo__field">

                                        <div class="promo_result promo__error hidden">
                                            <h6>
                                                Цей промокод на знижку не є дійсним.
                                            </h6>

                                        
                                        </div>

                                        <div class="promo_result promo__success">
                                            <h6>
                                            Промокод на знижку активовано.
                                            </h6>
                                        </div>
                                        <button class="promo__sbm" type="submit">
                                        застосувати
                                        </button> 
                                </form>
                                </div>
                            <div class="promo_result promo__success">
                               

                                <p>
                                    Сума: <span>4 110 грн</span> 
                                </p>
                                <p>
                                    Знижка: <span>205 грн</span>
                                </p>
                            </div>


                            <p class="promo__sum">
                            Разом: <span>4 110 грн</span>
                            </p>
                        </div>

                    <div class="check__call">
                        <label class="d-flex js_checkedBox">
                        <input type="checkbox" name="!call" class="hidden js_checked">
                        <img src="images/unchecked.svg" alt="Не звонить">

                        <p>
                        Не телефонувати для уточнення замовлення
                        </p>
                        </label>
                        
                    </div>

                    

                    <button type="submit" class="check__sbm">
                        оформити замовлення
                    </button>
                </div>

                <div class="col-lg-2"></div>

                <div class="col-lg-4 hideTel">
                    <div class="check_cart">
                        <h3 class="check_cart__title">
                        Кошик
                        </h3>
                        <hr class="filter__line">

                        <div class="check_cart__item d-flex">
                            <div class="picture">
                                <img src="images/Kelkin_Product_VitaminsVitC-1.png" alt="Вітаміни">
                            </div>
                            <div class="check_cart__info">
                            <a href="product.php"><h4 class="name">
                                Turmeric Curcumin 
                                1000 mg 
                            </h4></a>
                            <div class="d-flex desccription">
                                <p class="desc__price">
                                Ціна: <span>285 грн</span>
                                </p>

                                <p class="desc__quant">
                                Кількість: <span>10 шт</span>
                                </p>

                            </div>

                            <div class="check_cart__full">
                                <h5 class="price">
                                    Загалом: <span>2 850 грн</span>
                                </h5>
                            </div>
                            </div>
                        </div>


                        <div class="check_cart__item d-flex">
                            <div class="picture">
                                <img src="images/Kelkin_Product_VitaminsVitC-1.png" alt="Вітаміни">
                            </div>
                            <div class="check_cart__info">
                             <a href="product.php"><h4 class="name">
                                Turmeric Curcumin 
                                1000 mg 
                            </h4></a>
                            <div class="d-flex desccription">
                                <p class="desc__price">
                                Ціна: <span>285 грн</span>
                                </p>

                                <p class="desc__quant">
                                Кількість: <span>10 шт</span>
                                </p>

                            </div>

                            <div class="check_cart__full">
                                <h5 class="price">
                                    Загалом: <span>2 850 грн</span>
                                </h5>
                            </div>
                            </div>
                        </div>


                        <hr class="end_line">

                        <div class="promo">
                            <p class="promo__quest">
                            У мене є промокод на знижку
                            </p>

                            <div class="promo__send">
                                <form id="promo" method="post" action="file.php">
                                    <div class="d-flex">
                                        <input type="text" name="promo" class="promo__field">
                                        <button class="promo__sbm" type="submit">
                                        застосувати
                                        </button> 
                                    </div>
                                </form>
                            </div>

                            <div class="promo_result promo__success hidden">
                                <h6>
                                Промокод на знижку активовано.
                                </h6>

                                <p>
                                    Сума: <span>4 110 грн</span> 
                                </p>
                                <p>
                                    Знижка: <span>205 грн</span>
                                </p>
                            </div>

                            <div class="promo_result promo__error">
                                <h6>
                                    Цей промокод на знижку не є дійсним.
                                </h6>

                                <p>
                                    Сума: <span>4 110 грн</span> 
                                </p>
                                <p>
                                    Знижка: <span>205 грн</span>
                                </p>
                            </div>

                            <p class="promo__sum">
                            Разом: <span>4 110 грн</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
</main>



<?php
    include_once("static/footer.php");
?>