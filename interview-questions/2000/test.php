#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
    [2, 3, 3, 1, 5, 2],
    [2, 4, 3, 5, 1],
    [1],
    [2, 2],
    [2, 1],
    [2, 1, 3],
    [2, 3, 3],
    [3, 3, 3],
    [8, 4, 6, 2, 6, 4, 7, 9, 5, 8],
    [10, 6, 8, 4, 9, 1, 7, 2, 5, 3],
    [1, 1, 2, 2, 1],
    [4, 8, 15, 16, 23, 42],
    [42, 30, 5, 15, 10, 9, 5, 10, 10],
];

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = firstDuplicate($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
print_r($solutions);
