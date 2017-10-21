<?php
$num = rand(1, 9);
$number = rand();
$sum = 0;

for ($i = 0; $i < mb_strlen((string)$number); $i++) {
    $numStr = (string)$number;
    $numTest = $numStr[$i];
    if ($numTest == $num) {
        $sum += 1;
    }
}

if ($sum == 2 || $sum == 3 || $sum == 4) {
    $end = 'а';
} else {
    $end = '';
}

echo "Цифра {$num} в числе {$number} встречается {$sum} раз{$end}";