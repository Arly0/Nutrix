<?php
    include_once("static/header.php")
?>

<main>
    <section class="orders" id="orders">
        <div class="container">
        <!--  navigation block -->
             <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Мої замовлення</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
            <?php
                        include_once("static/popap_underhead.php");
                    ?>
                <div class="col-lg-12">
                    <h2 class="orders__title">
                    Мої замовлення
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
                    <div class="orders__header d-grid">
                            <div class="head__item">
                                <h4 class="showDesk">
                                # замовлення
                                </h4>
                                <h4 class="showMob">
                                # замов.
                                </h4>
                            </div>

                            <div class="head__item">
                                <h4 class="showDesk">
                                дата замовлення
                                </h4>
                                <h4 class="showMob">
                                дата
                                </h4>
                            </div>

                            <div class="head__item">
                                <h4>
                                вартість
                                </h4>
                            </div>
                    </div>

                    <div class="orders__item">
                        <div class="d-grid">
                            <div class="element order__num">
                                <p>
                                300045
                                </p>
                            </div>

                            <div class="element order__date">
                                <p>
                                24.05.2019
                                </p>
                            </div>

                            <div class="element order__price">
                                <p>
                                7 805 грн
                                </p>
                            </div>

                            <div class="orders__moreBtn">
                                <a class="d-flex open js_order-more" href="">Детальніше
                                <div class="svg-container">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6l4 4 4-4"  stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                                </a>
                            </div>
                        </div>

                        <div class="orders__more hidden">
                            <div class="d-flex">
                                <div class="picture">
                                    <img src="images/Kelkin_Product_VitaminsVitC-1.png" alt="Вітаміни">
                                </div>

                                <div class="desc">
                                    <div class="name">
                                        <h4>
                                            <a href="product.php">Turmeric Curcumin 1000 mg </a>
                                        </h4>
                                    </div>

                                    <div class="d-flex">
                                        <div class="price">
                                            <p>Ціна: <span>285 грн</span></p>
                                        </div>
                                        <div class="quant">
                                            <p>Кількість: <span>10 шт</span></p>
                                        </div>
                                        <div class="all">
                                            <p>Загалом: <span>2 850 грн </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="orders__more hidden">
                            <div class="d-flex">
                                <div class="picture">
                                    <img src="images/Kelkin_Product_VitaminsVitC-1.png" alt="Вітаміни">
                                </div>

                                <div class="desc">
                                    <div class="name">
                                        <h4>
                                            <a href="product.php">Turmeric Curcumin 1000 mg </a>
                                        </h4>
                                    </div>

                                    <div class="d-flex">
                                        <div class="price">
                                            <p>Ціна: <span>285 грн</span></p>
                                        </div>
                                        <div class="quant">
                                            <p>Кількість: <span>10 шт</span></p>
                                        </div>
                                        <div class="all">
                                            <p>Загалом: <span>2 850 грн </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    <div class="orders__item">
                        <div class="d-grid">
                            <div class="element order__num">
                                <p>
                                300045
                                </p>
                            </div>

                            <div class="element order__date">
                                <p>
                                24.05.2019
                                </p>
                            </div>

                            <div class="element order__price">
                                <p>
                                7 805 грн
                                </p>
                            </div>

                            <div class="orders__moreBtn">
                                <a class="d-flex close js_order-more" href="">Детальніше
                                <div class="svg-container">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6l4 4 4-4"  stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                                </a>
                            </div>
                        </div>

                        <div class="orders__more">
                            <div class="d-flex">
                                <div class="picture">
                                    <img src="images/Kelkin_Product_VitaminsVitC-1.png" alt="Вітаміни">
                                </div>

                                <div class="desc">
                                    <div class="name">
                                        <h4>
                                            <a href="product.php">Turmeric Curcumin 1000 mg </a>
                                        </h4>
                                    </div>

                                    <div class="d-flex">
                                        <div class="price">
                                            <p>Ціна: <span>285 грн</span></p>
                                        </div>
                                        <div class="quant">
                                            <p>Кількість: <span>10 шт</span></p>
                                        </div>
                                        <div class="all">
                                            <p>Загалом: <span>2 850 грн </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="orders__more">
                            <div class="d-flex">
                                <div class="picture">
                                    <img src="images/Kelkin_Product_VitaminsVitC-1.png" alt="Вітаміни">
                                </div>

                                <div class="desc">
                                    <div class="name">
                                        <h4>
                                            <a href="product.php">Turmeric Curcumin 1000 mg </a>
                                        </h4>
                                    </div>

                                    <div class="d-flex">
                                        <div class="price">
                                            <p>Ціна: <span>285 грн</span></p>
                                        </div>
                                        <div class="quant">
                                            <p>Кількість: <span>10 шт</span></p>
                                        </div>
                                        <div class="all">
                                            <p>Загалом: <span>2 850 грн </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="orders__all">
                        <p>
                        Разом: <span>13 253 грн</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include_once("static/footer.php");
?>