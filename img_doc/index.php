<?php

require_once __DIR__ . '/lib/files.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.00">
        <title>Gallery and Documents</title>
    </head>
    <body>
        <p><a href="form.php">Перейти к форме для загрузки файлов</a></p>
        <h2>Галерея загруженных картинок</h2>
        <?php printImg(); ?>
        <h2>Список загруженных документов</h2>
        <?php printDoc(); ?>
    </body>
</html>