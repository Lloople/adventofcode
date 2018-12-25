<?php

require __DIR__ . '/vendor/autoload.php';

$year = $argv[1] ?? date('Y');

foreach (range(1, 31) as $day) {
    $day = sprintf('%02d', $day);

    $namespace = "Advent\Y{$year}\D{$day}";

    if (class_exists($namespace)) {
        echo "---- Day {$day} ----".PHP_EOL;

        run($namespace);
    }
}
