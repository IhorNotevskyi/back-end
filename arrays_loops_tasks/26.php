<?php
$arr = [];
$arrLen = rand(3, 7);

$mult = 1;
$arrMult = [];

foreach (range(0, $arrLen) as $value) {
    array_push($arr, rand(1, 100));
}

echo "<pre>";
print_r($arr);
echo "</pre>";

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] > 0 && !($i % 2)) {
        $mult *= $arr[$i];
    }
    if ($arr[$i] > 0 && $i % 2) {
        array_push($arrMult, $arr[$i]);
    }
}

echo "<br>" . "<hr>" . "<br>";

echo "Multiplication: {$mult}";

echo "<pre>";
print_r($arrMult);
echo "</pre>";