<?php
$cssFilePaths = [
    '/resources/css/layout/homepage.css'
];

$langFile = include('resources/lang/frontend.php');
$locale = 'sk';

?>
<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <section class="page page-homepage page-homepage__section--gray">
            <div class="ct">
                <div class="ctr">
                    <div class="fx-58 page-homepage__claim__wrapper">
                        <div class="page-homepage__claim">
                            <h1>
                                <?= $langFile[$locale]['homepage']['title'] ?>
                            </h1>
                            <p>
                                <?= $langFile[$locale]['homepage']['claim_1'] ?>
                                <br class="page-homepage__claim__br">
                                <?= $langFile[$locale]['homepage']['claim_2'] ?>
                            </p>
                            <p>
                                <a href="/about.php" class="btn-red">
                                    Ďalšie informácie
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="fx-41 page-homepage__claim__wrapper__img-wrapper-outer">
                        <div class="page-homepage__img-wrap">
                            <img src="./resources/img/back8.png" alt="Redmi 4A" width="1458" height="2354"
                                 class="page-homepage__image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-homepage__ui-sec">
            <div class="ct">
                <div class="ctr page-homepage__red-sec">
                    <div class="fx-22 page-homepage__ui-sec-video">
                        <video autoplay muted loop>
                            <source src="./resources/video/video_user_interaction.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="fx-66 page-homepage__ui-sec-wrapper-outer">
                        <div class="page-homepage__ui-sec-wrapper">
                            <div>
                                <span class="page-homepage__ui-sec__teas">S novým vylepšeným UI</span>
                            </div>
                            <div>
                                <span class="page-homepage__ui-sec__sub-teas">S personalizovanými funkciami priamo pre Vás</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
<?php include('resources/partials/footer.php') ?>