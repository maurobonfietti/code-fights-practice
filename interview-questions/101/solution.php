<?php

/**
 * @param array $a
 * @return int
 */
function firstDuplicate($a)
{
    $arr = array_unique(array_diff_assoc($a, array_unique($a)));

    return reset($arr) ? : -1;
}
