<?php

/**
 * @param int $year
 * @return int
 */
function centuryFromYear($year)
{
    $end = substr($year, -2, 2);
    if ($end == '00') {
        return floor($year / 100);
    } else {
        return floor($year / 100) + 1;
    }
}
