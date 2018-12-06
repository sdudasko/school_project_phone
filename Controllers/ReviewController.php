<?php

namespace Controllers;

const WRITE_FILE = 'review_comments.json';

const FILE_READ = WRITE_FILE;

class ReviewController
{
    /**
     * @return mixed
     */
    public function getReviews() {
        return json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.FILE_READ));
    }

    /**
     * @param $request
     */
    public function postReview(array $request) {

        $json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.FILE_READ);
        $data = json_decode($json);
        $data[] = $request;
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/'.WRITE_FILE, json_encode($data));

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}