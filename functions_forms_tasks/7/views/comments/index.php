<?php

$comments = [];

$dir = __DIR__ . '/../../data';
foreach (scandir($dir) as $file) {
    if (in_array($file, ['.', '..', '.gitignore'])) {
        continue;
    }

    $content = file_get_contents("{$dir}/{$file}");
    $comments[] = json_decode($content, true);
}

?>

<?php foreach ($comments as $comment) : ?>

    <hr>
    <div>
        <p><strong><em>Имя:</em></strong> <?= $comment['name'] ?></p>
        <p><strong><em>Комментарий:</em></strong> <?= nl2br($comment['comment']) ?></p>
    </div>
    <hr>

<?php endforeach; ?>

<div>
    <h2>Гостевая книга</h2>
    <form method="post" action="/7/save.php">
        <label for="one">Введите Ваше имя</label><br>
        <input type="text" name="username" id="one" required="required"><br><br>
        <label for="two">Введите Ваш комментарий</label><br>
        <textarea name="comment" id="two" cols="50" rows="7" required="required"></textarea><br><br>
        <input type="submit" value="Отправить"><br>
    </form>
</div>