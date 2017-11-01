<?php

$foldername = "Директория";
$folder = "";

function listFilesInDir($folder)
{
    if (is_dir($folder)) {
        $scanfolder = scandir($folder);
        unset($scanfolder[0], $scanfolder[1]);
        if (count($scanfolder) > 0) {
            foreach ($scanfolder as $value) {
                if (!is_dir($value)) {
                    echo "{$value}<br>";
                }
            }
        }
    } else {
        echo "Ошибка!";
    }
}

listFilesInDir($foldername);