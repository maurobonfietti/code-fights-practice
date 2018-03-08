#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    [[0,1,1,2],
     [0,5,0,0],
     [2,0,3,3]],
    [[1,1,1,0],
     [0,5,0,1],
     [2,1,3,10]],
    [[1,1,1],
     [2,2,2],
     [3,3,3]],
    [[0]],
//    [[4,1,1,2],
//     [0,5,0,0],
//     [2,0,3,3]],
//    [[3,3,3],
//     [3,3,3],
//     [3,3,3]],
//    [[0,1,1],
//     [2,0,2],
//     [3,3,0]],
];

$output = [
    9,
    9,
    18,
    0,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = matrixElementsSum($test);
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
