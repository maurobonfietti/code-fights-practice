<?php

class Solution
{
    public function run($x)
    {
        return $this->firstNotRepeatingCharacter($x);
    }

    private function firstNotRepeatingCharacter($s)
    {
        return array_search(1, array_count_values(str_split($s))) ?: "_";
    }
}
