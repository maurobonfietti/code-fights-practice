<?php

function makeArrayConsecutive2($statues)
{
    $max = max($statues);
    $min = min($statues);
    $count = count($statues);

    return $max - $min - $count + 1;
}
