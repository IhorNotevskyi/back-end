<?php

if (isset($_POST['words'])) {
    $words = $_POST['words'];
    function reverseString($text)
    {
        $text = iconv('utf-8', 'utf-32le', $text);
        $text = strrev($text);
        $text = iconv('utf-32be', 'utf-8', $text);
        return $text;
    }
    echo reverseString($words);
}