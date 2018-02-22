#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
    [3, 6, -2, -5, 7, 3],
    [-1, -2],
    [5, 1, 2, 3, 1, 4],
    [1, 2, 3, 0],
    [9, 5, 10, 2, 24, -1, -48],
    [5, 6, -4, 2, 3, 2, -23],
    [4, 1, 2, 3, 1, 5],
    [-23, 4, -3, 8, -12],
    [1, 0, 1, 0, 1000],
];

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = adjacentElementsProduct($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
print_r($solutions);
