<?php

$string = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

function firstLetter($text) {
    $result = "";
    $arr = explode(".", $text);
    foreach($arr as $value) {
        $array = explode(" ", $value);
        foreach($array as $key => $item) {
            if(empty($item)) {
                continue;
            } else {
                $item_array = preg_split('#(?<!^)(?!$)#u', $item);
                $item_array[0] = mb_strtoupper($item_array[0], "UTF-8");
                $array[$key] = implode("", $item_array);
                break;
            }
        }
        $res[] = implode(" ", $array);
    }
    $result .= implode(".", $res);
    return $result;
}

echo firstLetter($string);