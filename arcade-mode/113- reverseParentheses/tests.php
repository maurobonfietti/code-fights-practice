#!/usr/bin/php
<?php

require_once 'solution.php';

$input = [
    "a(bc)de",
    "a(bcdefghijkl(mno)p)q",
    "co(de(fight)s)",
    "Code(Cha(lle)nge)",
    "Where are the parentheses?",
    "abc(cba)ab(bac)c",
    "The ((quick (brown) (fox) jumps over the lazy) dog)",
];

$output = [
    "acbde",
    "apmnolkjihgfedcbq",
    "cosfighted",
    "CodeegnlleahC",
    "Where are the parentheses?",
    "abcabcabcabc",
    "The god quick nworb xof jumps over the lazy",
];

$solutions = [];

$i = 1;
echo "TESTS: \n";
foreach ($input as $t => $test) {
    $result = reverseParentheses($test);
    if ($result === $output[$t]) {
        echo "$i- OK.";
    } else {
        echo "$i- FAIL.";
    }
    if (isset($argv[1]) && $argv[1] === "-v") {
        echo "\nInput : " . var_export($test, true);
        echo "\nOutput: " . var_export($result, true);
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
