<?php
$cssFilePaths = [
    '/resources/css/layout/photo.css'
];
?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-photo">
            <h1 class="page-photo__main-heading center margined">Fotogaléria</h1>
            <div class="ct">
                <div class="ctr page-photo__row">
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src="./resources/img/mobile_front.jpg" alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src="./resources/img/mobile_back.png" alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src="./resources/img/nabijacka.jpg" alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                </div>
                <div class="ctr page-photo__row">
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src="./resources/img/int_1.png" alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src="./resources/img/front_mirror.png" alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src="./resources/img/int_2.png" alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                </div>
                <div class="ctr">
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src="./resources/img/int_3.png" alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                </div>
                <div class="ctr">
                    <p class="center">
                        <a href="#" class="btn-blue btn-see-more">Vidieť viac...</a>
                    </p>
                </div>
            </div>

        </div>

    </main>
<?php include('resources/partials/footer.php') ?>