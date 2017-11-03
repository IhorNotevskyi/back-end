<?php

require_once 'lib/req_session.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <a href="index.php">Index</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <h4>Cписок последних 10 страниц, которые посещал пользователь</h4>

<?php

if (isset($_SESSION['pages'])) {
    krsort($_SESSION['pages']);
    foreach ($_SESSION['pages'] as $page) {
        echo "<p style='text-align:center'>{$page}</p>";
    }
}

?>

    </body>
</html>