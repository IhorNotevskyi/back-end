<?php

$date = date("[d/m/Y H:i:s] ");

$addComment = function ($message) use ($date)
{
    $file = fopen(__DIR__ . '/../data/' . 'comments.txt', 'a');
    $message = preg_replace("/(\s){2,}/", ' ', $message);
    $message = $date . $message . PHP_EOL;
    fwrite($file, $message);
    fclose($file);
    return;
};