<?php
    include_once("static/header.php")
?>
    <!-- menu section -->




    <main>
        <section class="forgot" id="forgot">
            <div class="container">


                <!--  navigation block -->
                <div class="location">
                    <div>
                        <ul class="d-flex">
                            <li class="location__item location__main"><a href="index.php">Головна</a></li>
                            <img src="images/chevron-down.svg" alt="arrow" class="location__arrow">
                            <li class="location__item location__here"><a href="#">Відновлення паролю</a></li>
                        </ul>
                    </div>
                </div>



                <div class="row">

                    <?php
                        include_once("static/popap_underhead.php");
                    ?>

                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">

                        <div class="forgot__win">

                            <h3 class="forgot__title">
                                Відновлення паролю
                            </h3>

                            <form id="form1" action="file.php" method="post" class="forgot__form">
                                <div class="form__indent">
                                    <p class="form__subtitle">
                                        E-mail
                                    </p>

                                    <input type="email" name="email" required  class="form__field js_validate">
                                </div>

                                <button type="submit" class="form__sbm" name="sbm">
                                    відправити
                                </button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>





    <?php
        include_once("static/footer.php");
    ?>
    