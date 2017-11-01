<?php

if ($_POST) {
    $words = $_POST['words'];
}

function topThreeWords($words)
{
    $words = explode(" ", $words);
    for ($i = 0; $i < count($words); $i++) {
        for ($j = 0; $j < (count($words) - 1); $j++) {
            if (mb_strlen($words[$j]) < mb_strlen($words[$j + 1])) {
                $len = $words[$j];
                $words[$j] = $words[$j + 1];
                $words[$j + 1] = $len;
            }
        }
    }
    return (array_slice($words, 0, 3));
}

echo "<pre>";
print_r(topThreeWords($words));
echo "</pre>";