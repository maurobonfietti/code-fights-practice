<?php

/**
 * Given a string representing a phone number,
 * returns this phone number reconverted.
 *
 * @param string $str
 * @return string
 */
function phoneNumberConverter($str)
{
    $digits = preg_replace('/[^0-9]/', '', $str);
    $numbers = str_split($digits, 3);
    $phoneNumber = implode('-', $numbers);

    return $phoneNumber;
}
