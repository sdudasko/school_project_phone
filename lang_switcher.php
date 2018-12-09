<?php

$langFile = include('resources/lang/frontend.php');

if (!isset($_GET['lang'])) {
    $locale = 'sk';
} else {
    $locale = $_GET['lang'];
}