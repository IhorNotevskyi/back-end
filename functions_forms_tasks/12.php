<?php

$string = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';

function sentenceBackward($string)
{
    $string = explode('.', $string);
    $string = array_filter($string);
    krsort($string);

    foreach ($string as $key => $value) {
        echo "{$value}.";
    }
}

sentenceBackward($string);