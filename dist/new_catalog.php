<?php
    include_once("static/header.php")
?>


<main>
    <section class="catP" id="catP">
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

                    <div class="d-grid catP__content">
                        <div class="catP__card catP__first">
                            <div class="catP__pict"></div>
                            <div class="catP__title">
                                <h3>
                                здоров’я органів
                                </h3>
                            </div>
                            <div class="catP__desc">
                                <ul>
                                    <a href="category.php"><li>- Серце</li></a>
                                    <a href="category.php"><li>- Мозок</li></a>
                                    <a href="category.php"><li>- Печінка</li></a>
                                    <a href="category.php"><li>- Жовчний міхур</li></a>
                                </ul>
                            </div>
                        </div>

                        <div class="catP__card catP__second">
                            <a href="category.php"><div class="catP__pict"></div></a>
                            <div class="catP__title">
                                <h3>
                                підтримка систем
                                </h3>
                            </div>
                            <div class="catP__desc">
                                <ul>
                                    <a href="category.php"><li>- Опорно-рухова система</li></a>
                                    <a href="category.php"><li>- Імунна система</li></a>
                                    <a href="category.php"><li>- Травна система</li></a>
                                    <a href="category.php"><li>- Нервова система</li></a>
                                </ul>
                            </div>
                        </div>

                        <div class="catP__card catP__third">
                        <a href="category.php"><div class="catP__pict"></div></a>
                            <div class="catP__title">
                                <h3>
                                процес відновлення
                                </h3>
                            </div>
                            <div class="catP__desc">
                                <ul>
                                    <a href="category.php"><li>- Молодість і краса</li></a>
                                    <a href="category.php"><li>- Антистрес</li></a>
                                    <a href="category.php"><li>- Здоровий сон</li></a>
                                    <a href="category.php"><li>- Схуднення</li></a>
                                </ul>
                            </div>
                        </div>


                        <div class="catP__card catP__fourth">
                        <a href="category.php"><div class="catP__pict"></div></a>
                            <div class="catP__title">
                                <h3>
                                    Вітаміни і мінерали
                                </h3>
                            </div>
                            <div class="catP__desc">
                                <h5>
                                Вітаміни
                                </h5>
                                <ul class="d-grid">
                                   <a href="category.php"> <li>- Вітамін A</li></a>
                                   <a href="category.php"> <li>- Вітамін D</li></a>
                                
                                   <a href="category.php"> <li>- Вітамін B</li></a>
                                    <a href="category.php"><li>- Вітамін E</li></a>
                                
                                   <a href="category.php"> <li>- Вітамін C</li></a>
                                   <a href="category.php"> <li>- Вітамін K</li></a>
                                </ul>

                                <h5>
                                Мультивітаміни
                                </h5>
                                <ul class="d-grid">
                                   <a href="category.php"> <li>- Для чоловіків</li></a>
                                   <a href="category.php"> <li>- Для вагітних</li></a>
                                
                                    <a href="category.php"><li>- Для жінок</li></a>
                                    <a href="category.php"><li>- 45+</li></a>
                                
                                  <a href="category.php">  <li>- Для дітей</li></a>
                                </ul>


                                <h5>
                                Мінерали
                                </h5>
                                <ul class="d-grid">
                                    <a href="category.php"><li>- Кальцій-магній</li></a>
                                   <a href="category.php"> <li>- Цинк</li></a>
                                
                                   <a href="category.php"> <li>- Залізо</li></a>
                                   <a href="category.php"> <li>- Усе мінерали</li></a>
                                
                                   <a href="category.php"> <li>- Хром</li></a>
                                </ul>
                            </div>

                            

                        </div>


                        <div class="catP__card catP__fifth">
                        <a href="category.php"><div class="catP__pict"></div></a>
                            <div class="catP__title">
                                <h3>
                                    добавки
                                </h3>
                            </div>
                            <div class="catP__desc">
                                <h5>
                                Антиоксиданти
                                </h5>
                                <ul>
                                    <a href="category.php"><li>- Кварцетин</li></a>
                                    <a href="category.php"><li>- Коензим Q10</li></a>
                                
                                    <a href="category.php"><li>- Екстракт босвелії</li></a>
                                    <a href="category.php"><li>- Зелений чай</li></a>
                                
                                    <a href="category.php"><li>- Усі антиоксиданти</li></a>
                                </ul>
                                <h5>
                                Амінокислоти
                                </h5>
                                <ul>
                                    <a href="category.php"><li>- L-карнітин</li></a>
                                    <a href="category.php"><li>- L-аргінін</li></a>
                                
                                    <a href="category.php"><li>- Таурин</li></a>
                                    <a href="category.php"><li>- BCAA</li></a>
                                
                                    <a href="category.php"><li>- Усі амінокислоти</li></a>
                                </ul>


                                <h5>
                                Чоловіче здоров’я
                                </h5>
                                <ul>
                                    <a href="category.php"><li>- Мака</li></a>
                                    <a href="category.php"><li>- Со Пальметто</li></a>
                                
                                    <a href="category.php"><li>- DHEA</li></a>
                                    <a href="category.php"><li>- Трібулус</li></a>
                                
                                    <a href="category.php"><li>- Усі чоловічі добавки</li></a>
                                </ul>


                                <h5>
                                Жіноче здоров’я
                                </h5>
                                <ul>
                                    <a href="category.php"><li>- Гіалуронова кислота</li></a>
                                   <a href="category.php"> <li>- Коллаген</li></a>
                                
                                    <a href="category.php"><li>- Олія примули вечірньої</li></a>
                                    <a href="category.php"><li>- Фолієва кислота</li></a>
                                
                                   <a href="category.php"> <li>- Усі жіночі добавки</li></a>
                                </ul>


                                <h5>
                                Омега
                                </h5>
                                <ul>
                                   <a href="category.php"> <li>- Омега-3</li></a>
                                    <a href="category.php"><li>- Омега 3-6-9</li></a>
                                
                                    <a href="category.php"><li>- Омега для дітей</li></a>
                                   <a href="category.php"> <li>- Омега для вагітних</li></a>
                                
                                   <a href="category.php"> <li>- Усі омега</li></a>
                                </ul>
                            </div>

                            

                        </div>

                        <div class="catP__card catP__sixth">
                        <a href="category.php"><div class="catP__pict"></div></a>
                            <div class="catP__title">
                                <h3>
                                    травлення і суперфуди
                                </h3>
                            </div>
                            <div class="catP__desc">
                                <h5>
                                Травлення і детокс
                                </h5>
                                <ul class="d-grid">
                                <a href="category.php"><li>- Пробіотики</li></a>
                                    <a href="category.php"><li>- Алое Вера</li></a>
                                
                                    <a href="category.php"><li>- Ферменти</li></a>
                                    <a href="category.php"><li>- Усе для травлення</li></a>
                                
                                    <a href="category.php"><li>- Клітковина</li></a>
                                </ul>

                                <h5>
                                Суперфуди
                                </h5>
                                <ul class="d-grid">
                                    <a href="category.php"><li>- Гуарана</li></a>
                                    <a href="category.php"><li>- Насіння чіа</li></a>
                                
                                    <a href="category.php"><li>- Спіруліна</li></a>
                                    <a href="category.php"><li>- Усі суперфуди</li></a>
                                
                                    <a href="category.php"><li>- Хлорела</li></a>
                                </ul>


                                <h5>
                                Трави і приправи
                                </h5>
                                <ul class="d-grid">
                                    <a href="category.php"><li>- Куркума</li></a>
                                    <a href="category.php"><li>- Стевія</li></a>
                                
                                    <a href="category.php"><li>- Імбир</li></a>
                                    <a href="category.php"><li>- Усі трави</li></a>
                                
                                    <a href="category.php"><li>- Пажитник</li></a>
                                </ul>
                            </div>

                            

                        </div>


                        <div class="catP__card catP__seventh">
                        <a href="category.php"><div class="catP__pict"></div></a>
                            <div class="catP__title">
                                <h3>
                                інші добавки
                                </h3>
                            </div>
                            <div class="catP__desc">
                                <h5>
                                Соки
                                </h5>
                                <ul>
                                <a href="category.php"><li>- Алое вера</li></a>
                                    <a href="category.php"><li>- Артишок</li></a>
                                
                                   <a href="category.php"> <li>- Гранат</li></a>
                                    <a href="category.php"><li>- Кропива</li></a>
                                
                                    <a href="category.php"><li>- Обліпиха</li></a>
                                    <a href="category.php"><li>- Усі соки</li></a>
                                </ul>
                                <h5>
                                Олії
                                </h5>
                                <ul>
                                    <a href="category.php"><li>- Кокосова олія</li></a>
                                   <a href="category.php"> <li>- Лляна олія</li></a>
                                
                                    <a href="category.php"><li>- Арганова олія</li></a>
                                    <a href="category.php"><li>- Олія орегано</li></a>
                                
                                    <a href="category.php"><li>- Олія авокадо</li></a>
                                    <a href="category.php"><li>- Усі олії</li></a>
                                </ul>


                                <h5>
                                Особиста гігієна
                                </h5>
                                <ul>
                                   <a href="category.php"> <li>- Зубна паста</li></a>
                                    <a href="category.php"><li>- Антиперспіранти</li></a>
                                
                                    <a href="category.php"><li>- Шампуні</li></a>
                                   <a href="category.php"> <li>- Мило</li></a>
                                
                                    <a href="category.php"><li>- Антисептики</li></a>
                                    <a href="category.php"><li>- Усе для гігієни</li></a>
                                </ul>


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