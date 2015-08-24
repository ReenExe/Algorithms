<?php

namespace ReenExe\PrimeNumber\Eratosthenes;

class StringSieve extends Sieve
{
    public static function is($number)
    {
        $sequence = self::calculate($number, str_repeat(1, $number + 1), 0);
        return (bool) $sequence[$number];
    }
}