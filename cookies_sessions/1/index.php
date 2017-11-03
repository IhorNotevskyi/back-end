<?php

$colors = ['красный' => 'red', 'синий' => 'blue', 'зеленый' => 'green', 'желтый' => 'yellow', 'серый' => 'grey'];
$bgcolor = 'white';

if ( isset($_COOKIE['bgcolor']) && in_array($_COOKIE['bgcolor'], $colors)) {
    $bgcolor = $_COOKIE['bgcolor'];
}

if (isset($_POST['bgcolor']) && in_array($_POST['bgcolor'], $colors)) {
    $bgcolor = $_POST['bgcolor'];
    setcookie('bgcolor', $bgcolor, time() + 5 * 60);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Background</title>
    </head>
    <body style="background:<?= $bgcolor ?>">
        <p>Выберите цвет фона страницы</p>
        <form action="" method="POST">
            <select name="bgcolor">

                <?php

                foreach($colors as $key => $value) {
                    $selected = ($bgcolor == $value) ? " selected='selected'" : "";
                    echo "<option value=\"$value\" $selected>$key</option>";
                }

                ?>

            </select>
            <input type="submit" value="Выбрать">
        </form>
    </body>
</html>
