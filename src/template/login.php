<?php
    include_once("static/header.php")
?>

    <main>
        <section class="login" id="login">
            <div class="container">

             <!--  navigation block -->
             <div class="location">
                <div>
                    <ul class="d-flex">
                        <li class="location__item location__main"><a href="index.php">Головна</a></li>
                        <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                        <li class="location__item location__here"><a href="#">Авторизація</a></li>
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
                                Авторизація
                            </h3>

                            <div class="form__indent">
                                    <p class="form__subtitle">
                                        E-mail
                                    </p>

                                    <input type="email" name="email" required  class="form__field js_validate">
                                </div>

                                <div class="form__indent">
                                    <p class="form__subtitle">
                                        Пароль
                                    </p>

                                    <input type="password" name="password" required  class="form__field js_validate">
                                </div>

                                <div class="login__forgot">
                                    <a href="forgot.php">Забули пароль?</a>
                                </div>

                                <button type="submit" class="form__sbm" name="sbm">
                                    увійти
                                </button>

                                <div class="d-flex form__login">
                                    <p>
                                        Ще немає аккаунту? -  
                                    </p>
                                    <a href="registration.php">
                                        Зареєструйтесь
                                    </a>
                                </div>
                        </form>
                    </div>

                    <div class="reg__pict">

                    </div>
                    </div>

                    <div class="col-lg-1"></div>
                    
                </div>
            </div>
        </section>
    </main>


<?php
    include_once("static/footer.php");
?>