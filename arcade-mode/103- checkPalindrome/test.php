#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
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

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = checkPalindrome($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
print_r($solutions);
