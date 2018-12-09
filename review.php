<?php

require_once 'base.php';

use Controllers\ReviewController;

$cssFilePaths = [
    '/resources/css/layout/review.css',
    '/resources/css/partials/modals/review_create.css',
];
$jsFilePaths = [
    '/resources/scripts/review.js',
];

$reviews = (new ReviewController)->getReviews();

?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
<?php include('resources/partials/review_create.php') ?>
    <main>
        <div class="page page-review">
            <h1 class="page-review__main-heading center margined"><?= $langFile[$locale]['review']['title'] ?></h1>
        </div>
        <div class="ct">
            <?php if (!empty($reviews)) { ?>
            <?php foreach ($reviews as $review) { ?>
                <div class="page-review__post-section">
                    <div class="page-review__post">
                        <div class="ctr">
                            <div class="fx-100">
                                <span class="page-review__user"><?= $review->name ?></span>
                            </div>
                        </div>
                        <div class="ctr">
                            <div class="fx-100">
                                <p class="page-review__post__text">
                                    <?= $review->text ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
            <div class="ctr center" style="margin: 20px 0;">
                <div class="fx-100">
                    <span class="page-review__post-reply"><?= $langFile[$locale]['review']['answer'] ?></span>
                </div>
            </div>
        </div>

    </main>
<?php include('resources/partials/footer.php') ?>