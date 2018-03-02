#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    "aabaa",
    "abac",
    "a",
    "az",
    "abacaba",
    "z",
    "aaabaaaa",
    "zzzazzazz",
    "hlbeeykoqqqqokyeeblh",
    "hlbeeykoqqqokyeeblh",
];

$output = [
    true,
    false,
    true,
    false,
    true,
    true,
    false,
    false,
    true,
    true,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = checkPalindrome($test);
    if ($result === $output[$t]) {
        echo "$i- OK.";
    } else {
        echo "$i- FAIL.";
    }
    if (isset($argv[1]) && $argv[1] === "-v") {
        echo " Input: $test => Output: " . var_export($result, true);
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
