<?php

namespace Advent\Y2015;

use Advent\Day;

class D03 extends Day
{

    /**
     * --- Day 3: Perfectly Spherical Houses in a Vacuum ---
     *
     * Santa is delivering presents to an infinite two-dimensional grid of houses.
     *
     * He begins by delivering a present to the house at his starting location, and then an elf at the North Pole calls him via radio and tells him where to move next. Moves are always exactly one house to the north (^), south (v), east (>), or west (<). After each move, he delivers another present to the house at his new location.
     *
     * However, the elf back at the north pole has had a little too much eggnog, and so his directions are a little off, and Santa ends up visiting some houses more than once. How many houses receive at least one present?
     *
     * For example:
     *
     * > delivers presents to 2 houses: one at the starting location, and one to the east.
     * ^>v< delivers presents to 4 houses in a square, including twice to the house at his starting/ending location.
     * ^v^v^v^v^v delivers a bunch of presents to some very lucky children at only 2 houses.
     */
    public function part1()
    {
        $marker = [0, 0];
        $deliveries = ["0,0" => 1];

        foreach (str_split($this->input) as $movement) {
            if ($movement === '^') {
                $marker[1]++;
            } elseif ($movement === 'v') {
                $marker[1]--;
            } elseif ($movement === '<') {
                $marker[0]--;
            } elseif ($movement === '>') {
                $marker[0]++;
            }

            if (! isset($deliveries["{$marker[0]},{$marker[1]}"])) {
                $deliveries["{$marker[0]},{$marker[1]}"] = 0;
            }

            $deliveries["{$marker[0]},{$marker[1]}"]++;
        }

        return count($deliveries);
    }

    public function part2()
    {
        // TODO: Implement part2() method.
    }
}