<?php

class Solution
{
    public function run($x)
    {
        return $this->allLongestStrings($x);
    }

    private function allLongestStrings($inputArray)
    {
        $strLengths = array_map('strlen', $inputArray);
        $keys = array_keys($strLengths, max($strLengths));

        return array_values(array_intersect_key($inputArray, array_flip($keys)));
    }
}
