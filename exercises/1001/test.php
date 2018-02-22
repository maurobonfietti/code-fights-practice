#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
    1905,
    1700,
    1988,
    2000,
    2001,
    200,
    374,
    45,
    8,
    1984,
    2017,
];

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = centuryFromYear($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
print_r($solutions);
