<?php

namespace Controllers;

const WRITE_FILE = 'review_comments.txt';

const READ_FILE = WRITE_FILE;

class PostController extends Controller
{
    public function __construct()
    {
    }

    public function getReviews() {

    }

    /**
     * @param $request
     */
    public function postReview($request) {

        $request = json_encode($request);

        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/'.WRITE_FILE, $request, FILE_APPEND);

        die();
    }
}