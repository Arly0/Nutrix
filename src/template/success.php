<?php
    include_once("static/header.php")
?>


    <main>
    <section class="success" id="success">
        <div class="container">


            <div class="row">
                <?php
                    include_once("static/popap_underhead.php");
                ?>

                <div class="col-lg-12">
                    <div class="success__block">
                        <div class="success__pict">
                            <img src="images/succes_bg.png" alt="Success">
                        </div>

                        <h2 class="success__title">
                            Дякуємо, Іванов Іван, за реєстрацію на сайті!
                        </h2>

                        <p class="success__desc">
                            Ми відправили на вашу електронну адресу листа для активаціії вашого аккаунту.
                        </p>
                        <div>
                            <button type="button" class="success__btn js-go-toPage" name="index.php">
                                перейти на головну сторінку
                            </button>
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