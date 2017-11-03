<?php

// upload_max_filesize = 2M можно выставить в php.ini, т.к. место изменения PHP_INI_PERDIR (через ini_set( 'upload_max_size' , '2M' ); не получится), post_max_size тоже в php.ini можно поменять, в коде проверку сделал на размер файла

require_once __DIR__ . '/lib/files.php';

$mimeTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];
$storageImg = __DIR__ . '/img/';
$storageDoc = __DIR__ . '/doc/';

if (getIsPost() && !uploadFile($_FILES['upload'], $storageImg, $storageDoc, $mimeTypes)) {
    echo "<span style='color:red'>Не удалось загрузить файл.</span>";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.00">
        <title>Form</title>
    </head>
    <body>
        <p><a href="index.php">Вернуться на главную страницу</a></p>
        <h2 style='text-align:center'>Форма для загрузки файлов</h2>
        <form method="post" enctype="multipart/form-data"  style='text-align:center'>
            <input type="hidden" name="upload_max_filesize" value="2M">
            <input type="file" name="upload" required="required">
            <input type="submit" value="Загрузить">
        </form>
    </body>
</html>