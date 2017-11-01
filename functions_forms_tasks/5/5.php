<?php

$foldername = "Директория";
$wordsearch = "Ку-ку";
$folder = "";
$word = "";

function wordFilesInDir($folder, $word) {
    $catalog = $folder;
    if(is_dir($catalog) && !empty($word)) {
        $scanfolder = scandir($catalog);
        unset($scanfolder[0], $scanfolder[1]);
        if(count($scanfolder) > 0) {
            foreach($scanfolder as $value) {
                if (!is_dir($value) && strpos(file_get_contents($catalog . "/" . $value), $word) !== false) {
                    echo "$value<br>";
                }
            }
            unset($value);
        }
    } else {
        echo "Ошибка!";
    }
}

wordFilesInDir($foldername, $wordsearch);