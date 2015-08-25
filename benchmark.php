<?php

require_once 'vendor/autoload.php';

$benchmark = new \Lavoiesl\PhpBenchmark\Benchmark();

$benchmark->add('ArraySieve', function () {
    \ReenExe\PrimeNumber\Eratosthenes\ArraySieve::is(1000000);
});
$benchmark->add('StringSieve',  function () {
    \ReenExe\PrimeNumber\Eratosthenes\StringSieve::is(1000000);
});

$benchmark->run();