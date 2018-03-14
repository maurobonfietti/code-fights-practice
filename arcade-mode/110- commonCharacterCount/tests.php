#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    [
        "aabcc",
        "adcaa",
    ],
    [
        "zzzz",
        "zzzzzzz",
    ],
    [
        "abca",
        "xyzbac",
    ],
    [
        "a",
        "b",
    ],
    [
        "a",
        "aaa",
    ],
];

$output = [
    3,
    4,
    3,
    0,
    1,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = commonCharacterCount($test[0], $test[1]);
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
