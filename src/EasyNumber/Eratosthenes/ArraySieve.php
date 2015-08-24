<?php

namespace ReenExe\EasyNumber\Eratosthenes;

use ReenExe\EasyNumber\Sieve;

class ArraySieve implements Sieve
{
    public static function is($number)
    {
        $sequence = array_fill(2, $number - 1, true);

        for ($prime = 2, $max = floor(sqrt($number)); $prime <= $max; ++$prime) {

            if ($sequence[$prime]) {

                for ($complex = $prime * $prime; $complex <= $number; $complex += $prime) {
                    $sequence[$complex] = false;
                }
            }
        }

        return $sequence[$number];
    }
}