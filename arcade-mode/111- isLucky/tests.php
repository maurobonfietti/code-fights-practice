#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    1230,
    239017,
    134008,
    10,
    11,
    1010,
    261534,
    100000,
    999999,
    123321,
    123456,
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
    false,
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = isLuckyV2($test);
    if ($result === $output[$t]) {
        echo "$i- OK.";
    } else {
        echo "$i- FAIL.";
    }
    if (isset($argv[1]) && $argv[1] === "-v") {
        echo "\n";
        echo "Input: ";
        var_dump($test);
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
