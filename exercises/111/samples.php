<?php

class Samples
{
    public static function getSamples()
    {
        $samples = [
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
        ];

        return $samples;
    }

    public static function getExpectedOutput()
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
        ];
    }
}
