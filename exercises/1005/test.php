#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
    [],
    [1, 3, 2, 1],
    [1, 3, 2],
    [1, 2, 1, 2],
    [1, 4, 10, 4, 2],
    [10, 1, 2, 3, 4, 5],
    [1, 1, 1, 2, 3],
    [0, -2, 5, 6],
    [1, 2, 3, 4, 5, 3, 5, 6],
    [40, 50, 60, 10, 20, 30],
    [1, 1],
    [1, 2, 5, 3, 5],
    [1, 2, 5, 5, 5],
    [10, 1, 2, 3, 4, 5, 6, 1],
    [1, 2, 3, 4, 3, 6],
    [1, 2, 3, 4, 99, 5, 6],
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
    [3, 5, 67, 98, 3],
];

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = almostIncreasingSequence($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
var_dump($solutions);
