#!/usr/bin/php
<?php

require_once 'solution.php';

$solution = new Solution();
$solutions = [];
$tests = $solution::getInput();
$output = $solution::getOutput();

echo "Results: \n";

foreach ($tests as $i => $test) {
    $result = $solution->run($test);
    if ($result === $output[$i]) {
        echo "Test $i: OK.\n";
    } else {
        echo "Test $i: FAIL.\n";
    }
    $solutions[] = $result;
}

if ($output === $solutions) {
    echo "Tests CORRECT :-) \n";
} else {
    echo "Tests FAILURES..! \n";
}
