<?php

$date = date("d/m/Y в H:i:s") . " пользователь посетил страницу ";
$page = $date . basename($_SERVER['REQUEST_URI']);

session_start();

if (isset($_SESSION['pages'])) {
    if (count($_SESSION['pages']) < 10) {
        $_SESSION['pages'][] = $page;
    } else {
        for ($i = 1; $i < 10; $i++) {
            $_SESSION['pages'][$i - 1] = $_SESSION['pages'][$i];
        }
        $_SESSION['pages'][9] = $page;
    }
} else {
    $_SESSION['pages'] = [];
    $_SESSION['pages'][] = $page;
}