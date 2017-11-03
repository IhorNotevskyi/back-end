<?php

/**
 * @return bool
 */
function getIsPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * @param array $fileData
 * @param string $storage
 * @param array $allowedMimeTypes
 * @return bool
 */
function uploadFile(array $fileData, $storageImg, $storageDoc, array $allowedMimeTypes = [])
{
    if ($fileData['size'] <= 0) {
        return false;
    }
    if ($fileData['size'] > 2 * 1024 * 1024) {
        echo "<span style='color:#ff0000'>Файл слишком большой. </span>";
        return false;
    }

    if ($allowedMimeTypes && !in_array($fileData['type'], $allowedMimeTypes)) {
        $storageDoc = rtrim($storageDoc, '/\\') . '/';
        $ext = pathinfo($fileData['name'], PATHINFO_EXTENSION);
        $newFileName = getUniqueName($storageDoc, $ext);
        return move_uploaded_file($fileData['tmp_name'], "{$storageDoc}/{$newFileName}");

    } else {
        $storageImg = rtrim($storageImg, '/\\') . '/';
        $ext = pathinfo($fileData['name'], PATHINFO_EXTENSION);
        $newFileName = getUniqueName($storageImg, $ext);
        return move_uploaded_file($fileData['tmp_name'], "{$storageImg}/{$newFileName}");
    }
}

/**
 * @param string $dir
 * @param string $ext
 * @return string
 */
function getUniqueName($dir, $ext)
{
    $dir = rtrim($dir, '/\\') . '/';
    do {
        $name = time() . '_' . uniqid() . ".{$ext}";
    } while (file_exists("{$dir}/{$name}"));

    return $name;
}

function printImg()
{
    $files = scandir(__DIR__ . '/../img');
    $images = array_filter($files, function ($item) {
        return !in_array($item, ['.', '..', '.gitignore']);
    });

    foreach ($images as $image) {
        echo "<img src='img/$image' style='height:200px'>";
    }
}

function printDoc()
{
    $lists = scandir(__DIR__ . '/../doc');
    $docs = array_filter($lists, function ($value) {
        return !in_array($value, ['.', '..', '.gitignore']);
    });

    $count = 0;
    foreach ($docs as $doc) {
        $count++;
        echo "{$count}) {$doc}<br>";
    }
}
