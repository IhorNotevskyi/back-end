<?php

require_once __DIR__ . '/lib/comments.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Guestbook</title>
    </head>
    <body>
        <hr style="margin-bottom:22px">

<?php
    if (!empty($comments)) {
        echo nl2br(nl2br($comments));
    }
?>

        <hr>
        <h2>Гостевая книга</h2>
        <form method="post" action="8.php">
            <label for="one">Введите Ваш комментарий</label><br>
            <textarea name="comment" id="one" cols="50" rows="7" required="required"></textarea><br>
            <input type="submit" value="Добавить">

<? if(!$ident) : ?>
        <span style="color:#ff0000; margin-left:45px">Некорректный комментарий</span>
<? endif; ?>

        </form>
    </body>
</html>