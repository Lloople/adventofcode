<?php

function run(string $namespace, $part = null)
{
    $class = new $namespace();

    if (! $part || $part == 1) {
        $start = microtime(true);
        $result = $class->part1();
        $end = microtime(true);
        echo "Part 1 - Result: {$result}. Time: " . round($end - $start, 2) . "s" . PHP_EOL;
    }

    if (! $part || $part == 2) {
        $start = microtime(true);
        $result = $class->part2();
        $end = microtime(true);
        echo "Part 2 - Result: {$result}. Time: " . round($end - $start, 2) . "s" . PHP_EOL;
    }
}

function dd($arg)
{
    var_dump($arg);
    exit;
}

function dumpe($dump)
{
    echo $dump . PHP_EOL;
}

function dump($dump)
{
    print_r($dump);
    echo PHP_EOL;
}
