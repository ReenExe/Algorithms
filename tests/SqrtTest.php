<?php

class SqrtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @param $source
     * @param $expected
     */
    public function test($source, $expected)
    {
        $this->assertTrue(\ReenExe\Sqrt::find($source) === $expected);
    }

    public function dataProvider()
    {
        return [
            [4, 2]
        ];
    }
}