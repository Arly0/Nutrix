<?php
    include_once("static/header.php")
?>


<main>
    <section class="cat" id="cat">
        <div class="container">
        <!--  navigation block -->
        <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Категорії</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <?php
                    include_once("static/popap_underhead.php");
                ?>
                <div class="col-lg-12">
                    <h2 class="cat__title">
                        категорії товаріів
                    </h2>

                    <div class="subcat">
                        <h3>
                            <i>вітаміни і мінерали</i>
                        </h3>
                    </div>

                    <div class="cat__list d-grid cat__vitamins">
                        <div>
                            <h5>
                            Вітаміни
                            </h5>

                            <ul class="d-grid">
                                <li>- Вітамін A</li>
                                <li>- Вітамін D</li>
                                <li>- Вітамін B</li>
                                <li>- Вітамін E</li>
                                <li>- Вітамін C</li>
                                <li>- Вітамін K</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Мультивітаміни
                            </h5>
                            <ul class="d-grid">
                                <li>- Для чоловіків</li>
                                <li>- Для вагітних</li>
                                <li>- Для жінок</li>
                                <li>- 45+</li>
                                <li>- Для дітей</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Мінерали
                            </h5>
                            <ul class="d-grid">
                                <li>- Кальцій-магній</li>
                                <li>- Цинк</li>
                                <li>- Залізо</li>
                                <li>- Усе мінерали</li>
                                <li>- Хром</li>
                            </ul>
                        </div>
                    </div>


                    <div class="subcat">
                        <h3>
                            <i>добавки</i>
                        </h3>
                    </div>
                    <div class="cat__list d-grid cat__adds">
                        <div>
                            <h5>
                            Антиоксиданти
                            </h5>
                            <ul>
                                <li>- Кварцетин</li>
                                <li>- Коензим Q10</li>
                                <li>- Екстракт босвелії</li>
                                <li>- Зелений чай</li>
                                <li>- Усі антиоксиданти</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Амінокислоти
                            </h5>
                            <ul>
                                <li>- L-карнітин</li>
                                <li>- L-аргінін</li>
                                <li>- Таурин</li>
                                <li>- BCAA</li>
                                <li>- Усі амінокислоти</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Чоловіче здоров’я
                            </h5>
                            <ul>
                                <li>- Мака</li>
                                <li>- Со Пальметто</li>
                                <li>- DHEA</li>
                                <li>- Трібулус</li>
                                <li>- Усі чоловічі добавки</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Жіноче здоров’я
                            </h5>
                            <ul>
                                <li>- Гіалуронова кислота</li>
                                <li>- Коллаген</li>
                                <li>- Олія примули вечірньої</li>
                                <li>- Фолієва кислота</li>
                                <li>- Усі жіночі добавки</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Омега
                            </h5>
                            <ul>
                                <li>- Омега-3</li>
                                <li>- Омега 3-6-9</li>
                                <li>- Омега для дітей</li>
                                <li>- Омега для вагітних</li>
                                <li>- Усі омега</li>
                            </ul>
                        </div>
                    </div>

                    <div class="subcat">
                        <h3>
                            <i>травлення і суперфуди</i>
                        </h3>
                    </div>

                    <div class="cat__list d-grid cat__superfood">
                        <div>
                            <h5>
                            Травлення і детокс
                            </h5>
                            <ul class="d-grid">
                                <li>- Пробіотики</li>
                                <li>- Алое Вера</li>
                                <li>- Ферменти</li>
                                <li>- Усе для травлення</li>
                                <li>- Клітковина</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Суперфуди
                            </h5>
                            <ul class="d-grid">
                                <li>- Гуарана</li>
                                <li>- Насіння чіа</li>
                                <li>- Спіруліна</li>
                                <li>- Усі суперфуди</li>
                                <li>- Хлорела</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Трави і приправи
                            </h5>
                            <ul class="d-grid">
                                <li>- Куркума</li>
                                <li>- Стевія</li>
                                <li>- Імбир</li>
                                <li>- Усе мінерали</li>
                                <li>- Усі трави</li>
                            </ul>
                        </div>
                    </div>


                    <div class="subcat">
                        <h3>
                            <i>інші добавки</i>
                        </h3>
                    </div>
                    <div class="cat__list d-grid cat__etc">
                        <div>
                            <h5>
                            Соки
                            </h5>
                            <ul>
                                <li>- Алое вера</li>
                                <li>- Артишок</li>
                                <li>- Гранат</li>
                                <li>- Кропива</li>
                                <li>- Обліпиха</li>
                                <li>- Усі соки</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Олії
                            </h5>
                            <ul>
                                <li>- Кокосова олія</li>
                                <li>- Лляна олія</li>
                                <li>- Арганова олія</li>
                                <li>- Олія орегано</li>
                                <li>- Олія авокадо</li>
                                <li>- Усі олії</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Особиста гігієна
                            </h5>
                            <ul>
                                <li>- Зубна паста</li>
                                <li>- Антиперспіранти</li>
                                <li>- Шампуні</li>
                                <li>- Мило</li>
                                <li>- Антисептики</li>
                                <li>- Усе для гігієни</li>
                            </ul>
                        </div>

                        <div>
                            <h5>
                            Аксесуари
                            </h5>
                            
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