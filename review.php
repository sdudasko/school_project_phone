<?php

use Controllers\PostController;

$classes = 'Controller';
$classes = 'PostController';

spl_autoload_register(function($className)
{
    $namespace = str_replace("\\","/",__NAMESPACE__);
    $className = str_replace("\\","/",$className);
    $class = (empty($namespace)?"":$namespace."/")."{$className}.php";
    include_once($class);
});

$cssFilePaths = [
    '/resources/css/layout/review.css',
    '/resources/css/partials/modals/review_create.css',
];
$jsFilePaths = [
    '/resources/scripts/review.js',
];
const TIMES = 2;

(new PostController())
    ->postReview([
        'Steuko',
        'Text spravicky',
        '2018-12-26',
    ]);


?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
<?php include('resources/partials/review_create.php') ?>
    <main>
        <div class="page page-review">
            <h1 class="page-review__main-heading center margined">Recenzie</h1>
        </div>
        <div class="ct">
            <?php for ($i = 1; $i <= TIMES; $i++) { ?>
                <img src=<?= "'/resources/img/img_'.$i" ?> alt="">
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

                    </div>
                </div>
            <?php } ?>
            <div class="ctr center" style="margin: 20px 0;">
                <div class="fx-100">
                    <span class="page-review__post-reply">Odpovedať</span>
                </div>
            </div>
        </div>

    </main>
<?php include('resources/partials/footer.php') ?>