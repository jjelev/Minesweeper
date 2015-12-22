<?php

$matrix = [];

for ($y = 0; $y < 16; $y++) {
    for ($x = 0; $x < 16; $x++) {
        $matrix[$y][$x] = mt_rand(0, 1);
    }
}

header('Access-Control-Allow-Origin: *');
echo json_encode($matrix);
die();
