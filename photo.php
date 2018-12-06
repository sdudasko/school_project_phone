<?php
$cssFilePaths = [
    '/resources/css/layout/photo.css'
];

$dir = scandir('resources/img/');

$images = [];

foreach($dir as $i => $file) {
    if (
        isset(explode('.', $file)['1']) && (
        explode('.', $file)['1'] == 'jpg' || explode('.', $file)['1'] == 'png')
    ) {
        array_push($images, $file);
    }
}
$unused_images = ['back8.png', 'phone_back_detail.png'];

foreach($unused_images as $image) {
    unset($images[array_search($image, $images)]);
}

$images = array_chunk($images, 3, false);

?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-photo">
            <h1 class="page-photo__main-heading center margined">Fotogaléria</h1>
            <div class="ct">
                <?php foreach ($images as $index => $image_row) { ?>
                <div class="ctr page-photo__row">
                    <?php foreach ($image_row as $image) { ?>
                    <div class="fx-33 page-photo__img-outer">
                        <div class="page-photo__img-wrapper">
                            <img src=<?= "./resources/img/".$image?> alt="Xiaomi" class="page-photo__img">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <div class="ctr">
                    <p class="center">
                        <a href="#" class="btn-blue btn-see-more">Vidieť viac...</a>
                    </p>
                </div>
            </div>

        </div>

    </main>
<?php include('resources/partials/footer.php') ?>