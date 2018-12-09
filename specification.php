<?php
require_once 'base.php';

$cssFilePaths = [
    '/resources/css/layout/specification.css'
];
?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-specification">
            <h1 class="page-specification__main-heading center margined"><?= $langFile[$locale]['specification']['title'] ?></h1>
            <div class="ct">
                <table class="main-table__table">
                    <thead>
                    <tr class="main-table__tr">
                        <th><?= $langFile[$locale]['specification']['table']['overview']['title'] ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <?php foreach($langFile[$locale]['specification']['table']['overview']['items'] as $item) { ?>
                        <tr class="main-table__tr">
                            <td><?= $item[0] ?></td>
                            <td><?= $item[1] ?></td>
                        </tr>
                    <?php } ?>
                    <tr class="main-table__tr">
                        <th><?= $langFile[$locale]['specification']['table']['display']['title'] ?></th>
                        <th></th>
                    </tr>
                    <?php foreach($langFile[$locale]['specification']['table']['display']['items'] as $item) { ?>
                        <tr class="main-table__tr">
                            <td><?= $item[0] ?></td>
                            <td><?= $item[1] ?></td>
                        </tr>
                    <?php } ?>
                    <tr class="main-table__tr">
                        <th><?= $langFile[$locale]['specification']['table']['battery']['title'] ?></th>
                        <th></th>
                    </tr>
                    <?php foreach($langFile[$locale]['specification']['table']['battery']['items'] as $item) { ?>
                    <tr class="main-table__tr">
                        <td><?= $item[0] ?></td>
                        <td><?= $item[1] ?></td>
                    </tr>
                    <?php } ?>
                    <tr class="main-table__tr">
                        <th><?= $langFile[$locale]['specification']['table']['hardware']['title'] ?></th>
                        <th></th>
                    </tr>
                    <?php foreach($langFile[$locale]['specification']['table']['hardware']['items'] as $item) { ?>
                        <tr class="main-table__tr">
                            <td><?= $item[0] ?></td>
                            <td><?= $item[1] ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <p class="center comparison-btn">
                    <a href="/comparison.php?lang=<?= $locale ?>" class="btn-red"><?= $langFile[$locale]['specification']['comparison'] ?></a>
                </p>
            </div>
        </div>
    </main>
<?php include('resources/partials/footer.php') ?>