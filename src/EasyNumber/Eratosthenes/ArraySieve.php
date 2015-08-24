<?php

namespace ReenExe\EasyNumber\Eratosthenes;

class ArraySieve extends Sieve
{
    public static function is($number)
    {
        $sequence = self::calculate($number, array_fill(2, $number - 1, true), false);
        return $sequence[$number];
    }
}