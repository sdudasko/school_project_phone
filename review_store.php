<?php

require_once 'autoloader.php';

use Controllers\ReviewController;

(new ReviewController())
    ->postReview([
        'name' => $_POST['name'],
        'text' => $_POST['text'],
        'hash' => rand(1, 10000000000),
    ]
);
