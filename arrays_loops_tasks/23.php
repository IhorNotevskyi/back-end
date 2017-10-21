<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="number" placeholder="Введите число">
        <input type="submit" value="Отправить">
    </form>
<?php

if (isset($_POST['number']) && is_numeric($_POST['number'])) {
    $num = $_POST['number'];
} else {
    exit("<br>Введите число");
}

$sum =  array_sum(str_split(abs($num), 1));
echo "<br>" . "Сумма цифр введенного числа $num равна $sum";

?>
</body>
</html>