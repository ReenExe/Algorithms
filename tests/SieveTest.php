<?php

class SieveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test($number, $expect)
    {
        $this->assertTrue(\ReenExe\EasyNumber\Sieve::is($number) === $expect);
    }

    public function dataProvider()
    {
        return [
            [2, true],
            [3, true],

            [5, true],
            [6, false],

            [109, true],
        ];
    }
}