#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
    [6, 2, 3, 8],
    [0, 3],
    [5, 4, 6],
    [6, 3],
    [1],
];

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = makeArrayConsecutive2($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
print_r($solutions);
