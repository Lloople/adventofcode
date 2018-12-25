<?php

namespace Advent;

abstract class Day
{

    /** @var array */
    protected $input;

    public function __construct()
    {
        $this->input = $this->loadInput();
    }

    public abstract function part1();
    public abstract function part2();

    private function loadInput()
    {
        $namespace = str_replace('\\', '/', get_class($this));
        $resource = str_replace('Advent', 'resources', $namespace);

        return include __DIR__ . "/../{$resource}.php";
    }
}