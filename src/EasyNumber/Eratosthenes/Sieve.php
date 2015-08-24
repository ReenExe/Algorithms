<?php

namespace ReenExe\EasyNumber\Eratosthenes;

/**
 * Решето Ератосфена
 */
abstract class Sieve implements \ReenExe\EasyNumber\Sieve
{
    protected static function calculate($number, $sequence, $false)
    {
        for ($prime = 2, $max = floor(sqrt($number)); $prime <= $max; ++$prime) {

            if ($sequence[$prime]) {

                for ($complex = $prime * $prime; $complex <= $number; $complex += $prime) {
                    $sequence[$complex] = $false;
                }
            }
        }

        return $sequence;
    }
}