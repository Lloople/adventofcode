<?php

function run(string $namespace)
{
    $class = new $namespace();

    echo "Part 1 - " . $class->part1() . PHP_EOL;
    echo "Part 2 - " . $class->part2() . PHP_EOL;
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
}
