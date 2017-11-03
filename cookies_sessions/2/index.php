<?php

if (isset($_GET['username'])) {
    session_start();
    $_SESSION['username'] = $_GET['username'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello</title>
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="user">Введите имя пользователя</label><br>
            <input type="text" name="username" id="user" required="required">
            <input type="submit" value="Отправить">
        </form>
    <p><a href="hello.php">Перейти на страницу hello</a></p>
    </body>
</html>
