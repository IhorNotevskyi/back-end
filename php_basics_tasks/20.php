<?php
var_dump((bool) 20);
/*
При преобразовании в boolean, следующие значения рассматриваются как FALSE:
- само значение boolean FALSE
- integer 0 (ноль)
- float 0.0 (ноль)
- пустая строка, и строка "0"
- массив без элементов
- особый тип NULL (включая неустановленные переменные)
- Объекты SimpleXML, созданные из пустых тегов

Все остальные значения рассматриваются как TRUE (включая любой resource и NAN).

Внимание: -1 рассматривается как TRUE, как и любое другое ненулевое (отрицательное или положительное) число!

http://php.net/manual/ru/language.types.boolean.php#language.types.boolean.casting
*/