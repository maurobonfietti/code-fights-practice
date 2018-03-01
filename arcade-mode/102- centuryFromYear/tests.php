#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
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
    2018,
];

$output = [
    20,
    17,
    20,
    20,
    21,
    2,
    4,
    1,
    1,
    20,
    21,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = centuryFromYear($test);
    if ($result === $output[$t]) {
        echo "$i- OK.";
    } else {
        echo "$i- FAIL.";
    }
    if (isset($argv[1]) && $argv[1] === "-v") {
        echo " Input: $test => Output: $result.";
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
