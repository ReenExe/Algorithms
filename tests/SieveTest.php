<?php

class SieveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test($number, $expect)
    {
        $this->assertTrue(\ReenExe\EasyNumber\Sieve::is($expect) === $expect);
    }

    public function dataProvider()
    {
        return [
            [2, true],
            [3, true],
            [4, false],
            [5, true],
            [6, false],
        ];
    }
}