<?php
$cssFilePaths = [
    '/css/layout/review.css',
    '/css/partials/modals/review_create.css',
];
$jsFilePaths = [
    '/resources/scripts/review.js',
];
const TIMES = 3;

?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
<?php include('resources/partials/review_create.php') ?>
    <main>
        <div class="page page-review">
            <h1 class="page-review__main-heading center margined">Recenzie</h1>
        </div>
        <div class="ct">
            <?php for($i = 1; $i <= TIMES; $i++) { ?>
            <div class="page-review__post-section">
                <div class="page-review__post">
                    <div class="ctr">
                        <div class="fx-100">
                            <span class="page-review__user">User1234</span>
                        </div>
                    </div>
                    <div class="ctr">
                        <div class="fx-100">
                            <p class="page-review__post__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi consequuntur
                                cupiditate
                                dolorem doloribus eligendi eum, exercitationem ipsam, iure, maxime minima neque non
                                nulla
                                pariatur quas quo tempora unde voluptatibus?
                            </p>
                        </div>
                    </div>
                    <div class="ctr">
                        <div class="fx-100">
                            <span class="page-review__post-reply">Odpovedať</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
<?php include('resources/partials/footer.php') ?>