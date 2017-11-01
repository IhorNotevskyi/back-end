<?php

$filename = "3.txt";

if (file_exists($filename)) {
    echo "<h3>Исходный файл</h3><span>" . file_get_contents($filename) . "</span><br><br>";
} else {
    die('Ошибка!');
}

if (isset($_POST['digit'])) {
    $digit = $_POST['digit'];
    $fileopen = fopen($filename, "r+");

    while (!feof($fileopen)) {
        $array = preg_split("/[\s,]+/", fgets($fileopen));

        foreach ($array as $key => $value) {
            if (mb_strlen($value, 'utf-8') > $digit) {
                unset($array[$key]);
            }
        }

        unset($value);
        $newstring[] = implode(' ', $array);
    }

    file_put_contents($filename, implode("\r\n", $newstring));
    fclose($fileopen);

    echo "<h3>Перезаписанный файл</h3><span>" . file_get_contents($filename) . "</span>";
}