#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    [-1, 150, 190, 170, -1, -1, 160, 180],
    [-1, -1, -1, -1, -1],
    [4, 2, 9, 11, 2, 16],
];

$output = [
    [-1, 150, 160, 170, -1, -1, 180, 190],
    [-1, -1, -1, -1, -1],
    [2, 2, 4, 9, 11, 16],
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = sortByHeight($test);
    if ($result === $output[$t]) {
        echo "$i- OK.\n";
    } else {
        echo "$i- FAIL.\n";
    }
    if (isset($argv[1]) && $argv[1] === "-v") {
        print_r($result);
    }
    $solutions[] = $result;
    $i++;
}

if ($output === $solutions) {
    echo "CORRECT :-) \n";
} else {
    echo "FAILURES..! \n";
}
