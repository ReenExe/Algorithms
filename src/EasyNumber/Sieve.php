<?php

namespace ReenExe\EasyNumber;

/**
 * Решето Ератосфена
 */
interface Sieve
{
    /**
     * @param $number
     * @return bool
     */
    public static function is($number);
}