<?php

require_once './lib/func.php';

$storage = __DIR__ . '/gallery/';
$mimeTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];

$dir = realpath($storage);
if (!file_exists($dir)) {
    if (!mkdir($dir, 755, true)) {
        die("Невозможно создать директорию галереи");
    }
}

if (isset($_FILES['upload'])) {
    $uploaded = uploadFile($_FILES['upload'], $storage, $mimeTypes);
    echo sprintf("Загружено %d из %d", $uploaded, count($_FILES['upload']['name']));
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
    </head>
    <body>
        <h1>Галерея</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="upload[]" multiple="multiple">
            <input type="submit" value="Загрузить">
        </form>
        <hr>

<?php

$files = scandir($dir);
$images = array_filter($files, function ($item) {
    return !in_array($item, ['.', '..']);
});
sort($images);

echo "<table><tr>";
for ($i = 0; $i < count($images); $i++) {
    if ( ($i % 3) == 0 ) {
        echo "</tr><tr>";
    }
    echo "<td><img src=\"gallery\\".$images[$i]."\" alt='Картинка'></td>";
}
echo "</tr></table>";

?>

    </body>
</html>