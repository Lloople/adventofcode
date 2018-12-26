<?php

require __DIR__ . '/vendor/autoload.php';

$day = isset($argv[1]) ? sprintf('%02d', $argv[1]) : date('d');

$year = $argv[2] ?? date('Y');

$runPart = $argv[3] ?? null;
$namespace = "Advent\Y{$year}\D{$day}";

if (class_exists($namespace)) {
    run($namespace, $runPart);
}
