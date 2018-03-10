#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    [
        "aba",
        "aa",
        "ad",
        "vcd",
        "aba",
    ],
    ["aa"],
    [
        "abc",
        "eeee",
        "abcd",
        "dcd"
    ],
    [
        "a",
        "abc",
        "cbd",
        "zzzzzz",
        "a",
        "abcdef",
        "asasa",
        "aaaaaa"
    ],
];

$output = [
    [
        "aba",
        "vcd",
        "aba",
    ],
    ["aa"],
    [
        "eeee",
        "abcd",
    ],
    [
        "zzzzzz",
        "abcdef",
        "aaaaaa"
    ],
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = allLongestStringsV2($test);
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
