<?php
$mas = [];
for ($i = 0; $i < 10; $i++) {
    $mas[$i] = rand(0, 100);
}
print_r($mas);
$min = $mas[0];
for ($i = 0; $i < 10; $i++) {
    if ($mas[$i] < $min) {
        $min = $mas[$i];
    }
}
print $min;