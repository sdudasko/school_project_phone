<?php
require_once 'base.php';

$cssFilePaths = [
    '/resources/css/layout/features.css'
];
?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-features">
            <div class="ct">
                <h1 class="page-about__main-heading center margined"><?= $langFile[$locale]['features']['title'] ?></h1>
                <div class="ctr">
                    <div class="fx-100">
                        <p class="page-features__claim-wrapper">
                            <?= $langFile[$locale]['features']['claim'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ctl ctl-1000">
                <div class="ctr">
                    <div class="fx-100">
                        <div class="ringtone-row">
                            <div class="ringtone-row-child">
                                <audio controls controlsList="nodownload">
                                    <source src="./resources/ringtones/EmailIncoming.ogg" type="audio/ogg">
                                </audio>
                            </div>
                            <div class="ringtone-row-child">
                                <span><?= $langFile[$locale]['features']['ringtones']['1']['title'] ?></span>
                            </div>
                            <div class="ringtone-row-child">
                                <?= $langFile[$locale]['features']['ringtones']['1']['manufacturer'] ?>
                            </div>
                            <div class="ringtone-row-child">
                                <?= $langFile[$locale]['features']['ringtones']['1']['default'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctr">
                    <div class="fx-100">
                        <div class="ringtone-row">
                            <div class="ringtone-row-child">
                                <audio controls controlsList="nodownload">
                                    <source src="./resources/ringtones/piano_rythm.mp3" type="audio/ogg">
                                </audio>
                            </div>
                            <div class="ringtone-row-child">
                                <span><?= $langFile[$locale]['features']['ringtones']['2']['title'] ?></span>
                            </div>
                            <div class="ringtone-row-child">
                                <?= $langFile[$locale]['features']['ringtones']['2']['manufacturer'] ?>
                            </div>
                            <div class="ringtone-row-child">
                                <?= $langFile[$locale]['features']['ringtones']['2']['default'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctr">
                    <div class="fx-100">
                        <div class="ringtone-row">
                            <div class="ringtone-row-child">
                                <audio controls controlsList="nodownload">
                                    <source src="./resources/ringtones/super_mario_bros.mp3" type="audio/ogg">
                                </audio>
                            </div>
                            <div class="ringtone-row-child">
                                <span><?= $langFile[$locale]['features']['ringtones']['3']['title'] ?></span>
                            </div>
                            <div class="ringtone-row-child">
                                <?= $langFile[$locale]['features']['ringtones']['3']['manufacturer'] ?>
                            </div>
                            <div class="ringtone-row-child">
                                <?= $langFile[$locale]['features']['ringtones']['3']['default'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ct">
                <div class="ctr center">
                    <h2 class="center heading-space"><?= $langFile[$locale]['features']['secondary_section']['title'] ?></h2>
                    <video autoplay muted loop>
                        <source src="./resources/video/live_interacion.mp4" type="video/mp4">
                        <?= $langFile[$locale]['features']['secondary_section']['no_support'] ?>
                    </video>
                </div>
                <div class="ctr">
                    <div class="fx-100 center">
                        <img src="/resources/gifs/1.gif" alt="Gif Xiaomi" class="features__gif">
                    </div>
                </div>
                <div class="ctr">
                    <div class="fx-100 center">
                        <img src="/resources/gifs/2.gif" alt="Gif Xiaomi" class="features__gif">
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include('resources/partials/footer.php') ?>