#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
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

$output = [
    false,
    true,
    false,
    false,
    true,
    false,
    true,
    false,
    false,
    true,
    true,
    false,
    false,
    true,
    true,
    true,
    true,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = almostIncreasingSequence($test);
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
