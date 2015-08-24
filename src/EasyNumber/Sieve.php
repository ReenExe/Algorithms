<?php

namespace ReenExe\EasyNumber;

interface Sieve
{
    /**
     * @param $number
     * @return bool
     */
    public static function is($number);
}