<?php

function centuryFromYear($year)
{
    $end = substr($year, -2, 2);
    if ($end == '00') {
        return (int) floor($year / 100);
    } else {
        return (int) floor($year / 100) + 1;
    }
}
