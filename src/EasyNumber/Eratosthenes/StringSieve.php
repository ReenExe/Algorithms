<?php

namespace ReenExe\EasyNumber\Eratosthenes;

use ReenExe\EasyNumber\Sieve;

class StringSieve implements Sieve
{
    public static function is($number)
    {
        $sequence = str_repeat(1, $number + 1);

        for ($prime = 2, $max = floor(sqrt($number)); $prime <= $max; ++$prime) {

            if ($sequence[$prime]) {

                for ($complex = $prime * $prime; $complex <= $number; $complex += $prime) {
                    $sequence[$complex] = 0;
                }
            }
        }

        return (bool) $sequence[$number];
    }
}