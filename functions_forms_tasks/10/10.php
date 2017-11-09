<?php

if(isset($_POST['words']))
{
    $words = $_POST['words'];
    function uniqueWords($text) 
    {
        $array = explode(" ", mb_strtolower($text));
        $array = array_count_values($array);
        $array = array_count_values($array);
        return $array[1];
    }
    echo uniqueWords($words);
}
