<?php

function sortByHeight($a)
{
    $keys = array_keys($a, -1);
    $sort_me = array_diff($a, [-1]);
    asort($sort_me);
    $sorted = array_values($sort_me);
    foreach($keys as $key)
    {
        array_splice($sorted, $key, 0, -1);
    }

    return $sorted;
}
