<?php

class Solution
{
    public function run($x)
    {
        return $this->isLucky($x);
    }

    private function isLucky($n)
    {
        return array_sum(str_split(substr($n, 0, strlen($n) / 2)))
            == array_sum(str_split(substr($n, strlen($n) / 2)));
    }

    private function isLuckyV2($n)
    {
        $result = array_sum(str_split(substr($n, 0, strlen($n) / 2)))
            == array_sum(str_split(substr($n, strlen($n) / 2)));

        return $result;
    }
}
