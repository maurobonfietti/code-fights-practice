<?php

function isLucky($n)
{
    return array_sum(str_split(substr($n, 0, strlen($n) / 2)))
        == array_sum(str_split(substr($n, strlen($n) / 2)));
}

function isLuckyV3($n)
{
    $middle1 = str_split(substr($n, 0, strlen($n) / 2));
    $middle2 = str_split(substr($n, strlen($n) / 2));

    return array_sum($middle1) === array_sum($middle2);
}
