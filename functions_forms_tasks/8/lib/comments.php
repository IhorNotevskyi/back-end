<?php

require_once __DIR__ . '/file.php';

$ident = true;
if (isset($_POST['comment'])) {
    $comment = trim(strip_tags($_POST['comment'], '<b>'));
    $mat = ['звиздец', 'трындец', 'пипец', 'муйня', 'фигня', 'мудак', 'херня'];
    $mat_delim = explode(' ', $comment);

    foreach ($mat_delim as $value) {
        foreach ($mat as $item) {
            if (strpos($value, $item) === false) {
                $ident = true;
            } else {
                $ident = false;
                break 2;
            }
        }
    }
    if ($ident) {
        $addComment($comment);
    }
}

$comments = file_get_contents(__DIR__ . '/../data/comments.txt', true);