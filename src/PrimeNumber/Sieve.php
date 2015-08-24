<?php

namespace ReenExe\PrimeNumber;

interface Sieve
{
    /**
     * @param $number
     * @return bool
     */
    public static function is($number);
}