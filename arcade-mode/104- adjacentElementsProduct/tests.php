#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
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

$output = [
    21,
    2,
    6,
    6,
    50,
    30,
    6,
    -12,
    0,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = adjacentElementsProduct($test);
    if ($result === $output[$t]) {
        echo "$i- OK.";
    } else {
        echo "$i- FAIL.";
    }
    if (isset($argv[1]) && $argv[1] === "-v") {
        echo "\n";
        echo "Input: ";
        print_r($test);
        echo "Output: " . var_export($result, true);
    }
    echo "\n";
    $solutions[] = $result;
    $i++;
}

if ($output === $solutions) {
    echo "CORRECT :-) \n";
} else {
    echo "FAILURES..! \n";
}
