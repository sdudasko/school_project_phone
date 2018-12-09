<?php
require_once 'base.php';

$cssFilePaths = [
    '/resources/css/layout/comparison.css',
    '/resources/css/layout/specification.css',
];
?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-comparison">
            <h1 class="page-comparison__main-heading center margined"><?= $langFile[$locale]['comparison']['title'] ?></h1>
            <div class="ct">
                <table class="main-table__table">
                    <thead>
                    <tr class="main-table__tr">
                        <th></th>
                        <th><?= $langFile[$locale]['comparison']['table']['overview']['title1'] ?></th>
                        <th><?= $langFile[$locale]['comparison']['table']['overview']['title2'] ?></th>
                    </tr>
                    <?php foreach($langFile[$locale]['comparison']['table']['overview']['items'] as $item) { ?>
                        <tr class="main-table__tr">
                            <td><?= $item[0] ?></td>
                            <td><?= $item[1] ?></td>
                            <td><?= $item[2] ?></td>
                        </tr>
                    <?php } ?>
                </table>

                <p class="comparison-summary" style="max-width: 70%;">
                    <?= $langFile[$locale]['comparison']['summary'] ?>
                </p>
            </div>
        </div>
    </main>
<?php include('resources/partials/footer.php') ?>