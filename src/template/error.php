<?php
    include_once("static/header.php")
?>



<main>
    <section class="error" id="error">
    <div class="vitamins">
        <div class="container">
            <div class="row">

                <?php
                    include_once("static/popap_underhead.php");
                ?>

                <div class="col-lg-12">
                
                <h2 class="error__title">
                    404
                </h2>
                
                <p class="error__desc">
                    Цієї сторінки не існує.
                </p>


                <button type="button" class="success__btn js-go-toPage" name="index.php">
                    перейти на головну
                </button>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>


<?php
    include_once("static/footer.php");
?>