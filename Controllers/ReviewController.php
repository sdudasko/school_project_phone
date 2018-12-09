<?php

namespace Controllers;

use Interfaces\IsSanitizeableInterface;

const WRITE_FILE = 'review_comments.json';

const FILE_READ = WRITE_FILE;


class ReviewController implements IsSanitizeableInterface
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
        $sanitized = $this->validate($request);

        if (!$sanitized['name']) {
            $sanitized['name'] = 'Anonym';
        }

        if (!$sanitized['text']) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            return;
        }

        $json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.FILE_READ);
        $data = json_decode($json);
        $data[] = $sanitized;
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/'.WRITE_FILE, json_encode($data));

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    /**
     * Very basic validation
     * @param array $request
     * @return array
     */
    public function validate(array $request): array
    {

        filter_var($request, FILTER_SANITIZE_STRING);

        foreach($request as $k => $item) {
            $item = str_replace(array( '(', ')' ), '', $item);
            $item = str_replace(array( '[', ']' ), '', $item);
            $item = str_replace(array( '{', '}' ), '', $item);
            $request[$k] = $item;
        }
        return $request;
    }
}