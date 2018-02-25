<?php

class Solution
{
    public function run($x)
    {
        return $this->sortByHeight($x);
    }

    private function sortByHeight($a)
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

    public static function getInput()
    {
        return [
            [-1, 150, 190, 170, -1, -1, 160, 180],
            [-1, -1, -1, -1, -1],
            [4, 2, 9, 11, 2, 16],
        ];
    }

    public static function getOutput()
    {
        return [
            [-1, 150, 160, 170, -1, -1, 180, 190],
            [-1, -1, -1, -1, -1],
            [2, 2, 4, 9, 11, 16],
        ];
    }
}
