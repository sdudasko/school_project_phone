<?php
$cssFilePaths = [
    '/resources/css/layout/about.css'
];
?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-about">
            <div class="ct">
                <div class="ctr">
                    <div class="fleft fxo-16 fx-66 page-about__section-text">
                        <h1 class="page-about__main-heading center margined"><?= $langFile[$locale]['about']['title'] ?></h1>
                    </div>
                </div>
                <div class="ctr">
                    <div class="fleft fxo-16 fx-66 page-about__section-white">
                        <p class="p">
                            <?= $langFile[$locale]['about']['claim_1'] ?>
                        </p>
                        <p class="p">
                            <?= $langFile[$locale]['about']['claim_2'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="page-about__section page-about__section--purple">
                <div class="ct">
                    <div class="ctr page-about__section__content">
                        <div class="fleft fxo-8 fx-33 page-about__section-teasing__wrapper">
                            <div class="page-about__section-teasing">
                                <?= $langFile[$locale]['about']['teasing'] ?>
                            </div>

                            <a href="/specification.php" class="btn btn-red btn--small">
                                <?= $langFile[$locale]['about']['cta_btn'] ?>
                            </a>
                        </div>
                        <div class="fleft fx-50 center page-about__section__img-wrapper">
                            <div class="mobile-back-detail">
                                <img src="./resources/img/phone_back_detail.png" alt="Mi 4A">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ct">
                <div class="ctr">
                    <div class="fleft fxo-16 fx-66 page-about__section-white">
                        <div class="section--white">
                            <p class="p">
                                <?= $langFile[$locale]['about']['secondary_section']['claim'] ?>
                            </p>
                            <p class="p">
                                <?= $langFile[$locale]['about']['secondary_section']['try_out'] ?>
                                <a href="/features.php" class="main-link"><?= $langFile[$locale]['about']['secondary_section']['try_out_ringtones'] ?></a>!
                            </p>
                            <p class="p">
                                Nakoľko máme veľa spokojných zákazníkov, ktorí sa radi podelia o svoje zážitky a svoje
                                pocity s
                                kúpou tohto telefónu,
                                môžete si ich názor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include('resources/partials/footer.php') ?>