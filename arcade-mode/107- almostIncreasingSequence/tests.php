#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    [6, 2, 3, 8],
    [0, 3],
    [5, 4, 6],
    [6, 3],
    [1],
    [1, 2, 3, 4, 5, 6, 7, 8, 9],
    [1, 5, 9],
];

$output = [
    3,
    2,
    0,
    2,
    0,
    0,
    6,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = makeArrayConsecutive2($test);
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
