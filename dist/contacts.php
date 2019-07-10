<?php
    include_once ("static/header.php");
?>


    <main>
        <section class="contact" id="contact">

           



            <div class="container">
                 <!--  navigation block -->
            <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Контакти</a></li>
                    </ul>
                </div>
            </div>
                <div class="row">

                    <?php
                        include_once("static/popap_underhead.php");
                    ?>

                    <div class="col-lg-12">
                        
                        <h2 class="contact__title">
                            контакти
                        </h2>

                        <div class="d-grid contact__blocks">
                            <!-- 1 -->
                            <div class="contact__item">
                                <img src="images/pin.svg" alt="Marker">

                                <p>
                                    м. Львів, вул. Зелена 41
                                </p>
                            </div>

                            <!-- 2 -->
                            <div class="contact__item">
                                <img src="images/smartphone.svg" alt="Phone">

                                <p>
                                    <a href="tle:+38 (068) 117 117 0">+38 (068) 117 117 0</a><br>
                                    <a href="tle:+38 (068) 117 117 1">+38 (068) 117 117 1</a>
                                </p>
                            </div>

                            <!-- 3 -->
                            <div class="contact__item">
                                <img src="images/email.svg" alt="Marker">

                                <p>
                                    <a href="mailto:nutrix@gmail.com">nutrix@gmail.com</a>
                                </p>
                            </div>

                            <!-- 4 -->
                            <div class="contact__item">
                                <img src="images/calendar.svg" alt="Marker">

                                <p>
                                    пн - пт з 9:00 до 18:00<br>
                                    сб - нд вихідні
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-7">
                        <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1337.3506174373404!2d33.339364898314656!3d47.9034676699487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dadf4de7caf353%3A0xc1e8f39c790c7c15!2z0L_RgNC-0YHQvy4g0JrQsNGA0LvQsCDQnNCw0YDQutGB0LAsINCa0YDQuNCy0L7QuSDQoNC-0LMsINCU0L3QtdC_0YDQvtC_0LXRgtGA0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA1MDAwMA!5e0!3m2!1sru!2sua!4v1560427038358!5m2!1sru!2sua" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-1"></div>

                    <div class="col-lg-4">
                        <div class="contact__form">
                            <form class="" id="form1" action="file.php" method="post">
                                <h3 class="form__title form__indent">
                                    Зворотній зв’язок
                                </h3>

                                <div class="form__indent">
                                    <p class="form__subtitle">
                                        Прізвище та ім’я
                                    </p>

                                    <input type="text" name="name" required  class="form__field js_validate">
                                </div>

                                <div class="form__indent">
                                    <p class="form__subtitle">
                                        Телефон
                                    </p>

                                    <input type="tel" name="phone" required  class="form__field js_validate">
                                </div>

                                <div class="form__indent">
                                    <p class="form__subtitle">
                                        Email
                                    </p>

                                    <input type="email" name="email" required  class="form__field js_validate">
                                </div>

                                <div class="form__indent">
                                    <p class="form__subtitle">
                                        Повідомлення
                                    </p>

                                    <textarea name="message" required class="form__field form__area"></textarea>
                                </div>

                                <button type="submit" class="form__sbm" name="sbm">
                                    відправити
                                </button>
                            </form>


                            <div class="form__thx hidden">
                                <h3 class="form__title">
                                    Дякуємо!
                                </h3>

                                <p class="form__text form__indent">
                                    Ми зв'яжемося з вами <br>
                                    у найближчий час.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php
    include_once ("static/footer.php");
?>