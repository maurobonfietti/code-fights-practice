<?php

class Solution
{
    public function run($x)
    {
        return $this->isLuckyV2($x);
    }

    private function isLucky($n)
    {
        return array_sum(str_split(substr($n, 0, strlen($n) / 2)))
            == array_sum(str_split(substr($n, strlen($n) / 2)));
    }

    private function isLuckyV2($n)
    {
        $a = array_sum(str_split(substr($n, 0, strlen($n) / 2)));
        $b = array_sum(str_split(substr($n, strlen($n) / 2)));

        return $a === $b;
    }

    public static function getInput()
    {
        return [
            1230,
            239017,
            134008,
            10,
            11,
            1010,
            261534,
            100000,
            999999,
            123321,
            123456,
        ];
    }

    public static function getOutput()
    {
        return [
            true,
            false,
            true,
            false,
            true,
            true,
            false,
            false,
            true,
            true,
            false,
        ];
    }
}
