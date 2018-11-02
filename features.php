<?php
$cssFilePaths = [
    '/css/layout/features.css'
];
?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-features">
            <div class="ct">
                <h1 class="page-about__main-heading center margined">Funkcie</h1>
                <div class="ctr">
                    <div class="fx-100">
                        <p class="page-features__claim-wrapper">
                            Tak, ako každý moderný mobilný telefón s operačným systémom Android, tak aj Redmi 4A
                            disponuje množstvom skvelých vychytávok.
                            Každý uživateľ určite ocení svelý fotoaparát, možnosť Dual Sim, USB-C konektor, ohromnú
                            výdrž batérie. Schopnosť integrácie a prepojenia s Mi Bandom.
                            Ďalej by sme Vám radi ponúkli možnosť vypočuť si zopár zo štandardných zvovení, ktoré sa v
                            telefóne už nachádzajú, alebo si ich tam môžete doplniť:
                        </p>
                    </div>
                </div>
                <div class="ringtone-row">
                    <audio controls controlsList="nodownload">
                        <source src="./resources/ringtones/EmailIncoming.ogg" type="audio/ogg">
                    </audio>
                    <div class="ringtone-row-child">
                        <span>EmailIncoming</span>
                    </div>
                    <div class="ringtone-row-child">
                        <span>Jedno z najznámejších zvonení</span>
                    </div>
                    <div class="ringtone-row-child">
                        Xiaomi
                    </div>
                    <div class="ringtone-row-child">
                        Nieje pridané výrobcom
                    </div>
                </div>

                <div class="ringtone-row">
                    <audio controls controlsList="nodownload">
                        <source src="./resources/ringtones/piano_rythm.mp3" type="audio/ogg">
                    </audio>
                    <div class="ringtone-row-child">
                        <span>piano_rhythm</span>
                    </div>
                    <div class="ringtone-row-child">
                        <span>Patrí mezdi štandardné zvonenie</span>
                    </div>
                    <div class="ringtone-row-child">
                        Xiaomi
                    </div>
                    <div class="ringtone-row-child">
                         Nieje pridané výrobcom
                    </div>
                </div>

                <div class="ringtone-row">
                    <audio controls controlsList="nodownload">
                        <source src="./resources/ringtones/super_mario_bros.mp3" type="audio/ogg">
                    </audio>
                    <div class="ringtone-row-child">
                        <span>super_mario_bros</span>
                    </div>
                    <div class="ringtone-row-child">
                        <span>Jedno z najznámejších zvonení</span>
                    </div>
                    <div class="ringtone-row-child">
                        Super Mario
                    </div>
                    <div class="ringtone-row-child">
                        Nieje pridané výrobcom
                    </div>
                </div>

                <div class="ctr center">
                    <h2 class="center heading-space">Prostredie telefónu</h2>

                    <video controls autoplay>
                        <source src="./resources/video/live_interacion.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

        </div>
    </main>
<?php include('resources/partials/footer.php') ?>