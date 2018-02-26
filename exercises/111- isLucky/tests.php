#!/usr/bin/php
<?php

require_once 'solution.php';

$solution = new Solution();
$solutions = [];
$tests = $solution::getInput();
$output = $solution::getOutput();

$i = 1;
echo "TESTS: \n";
foreach ($tests as $t => $test) {
    $result = $solution->run($test);
    if ($result === $output[$t]) {
        echo "$i- OK.\n";
    } else {
        echo "$i- FAIL.\n";
    }
    $solutions[] = $result;
    $i++;
}

if ($output === $solutions) {
    echo "CORRECT :-) \n";
} else {
    echo "FAILURES..! \n";
}
