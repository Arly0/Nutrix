<?php
    include_once("static/header.php")
?>


<main>
    <section class="reg" id="reg">
        <div class="container">

            <!--  navigation block -->
            <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Реєстрація</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">

                <?php
                    include_once("static/popap_underhead.php");
                ?>


                <div class="col-lg-1"></div>
                <div class="col-lg-10 reg__flex">

                    <div class="reg__form">
                        <form class="" id="form1" action="file.php" method="post">
                                <h3 class="form__title form__indent">
                                    Реєстрація
                                </h3>

                                <div class="d-flex form__login">
                                    <p>
                                        Є аккаунт? - 
                                    </p>
                                    <a href="login.php">
                                        Авторизуйтесь
                                    </a>
                                </div>

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

                                <!-- <div class="form__indent">
                                    <p class="form__subtitle">
                                        Повідомлення
                                    </p>

                                    <textarea name="message"  class="form__field form__area"></textarea>
                                </div> -->

                                <button type="submit" class="form__sbm" name="sbm">
                                    зареєструватися
                                </button>
                            </form>

                        </div>

                   

                    <div class="reg__pict">

                    </div>

                
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
</main>


<?php
    include_once("static/footer.php");
?>