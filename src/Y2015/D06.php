<?php

namespace Advent\Y2015;

use Advent\Day;

class D06 extends Day
{

    /**
     * --- Day 6: Probably a Fire Hazard ---
     *
     * Because your neighbors keep defeating you in the holiday house decorating contest year after year, you've decided to deploy one million lights in a 1000x1000 grid.
     *
     * Furthermore, because you've been especially nice this year, Santa has mailed you instructions on how to display the ideal lighting configuration.
     *
     * Lights in your grid are numbered from 0 to 999 in each direction; the lights at each corner are at 0,0, 0,999, 999,999, and 999,0. The instructions include whether to turn on, turn off, or toggle various inclusive ranges given as coordinate pairs. Each coordinate pair represents opposite corners of a rectangle, inclusive; a coordinate pair like 0,0 through 2,2 therefore refers to 9 lights in a 3x3 square. The lights all start turned off.
     *
     * To defeat your neighbors this year, all you have to do is set up your lights by doing the instructions Santa sent you in order.
     *
     * For example:
     *
     * turn on 0,0 through 999,999 would turn on (or leave on) every light.
     * toggle 0,0 through 999,0 would toggle the first line of 1000 lights, turning off the ones that were on, and turning on the ones that were off.
     * turn off 499,499 through 500,500 would turn off (or leave off) the middle four lights.
     * After following the instructions, how many lights are lit?
     */
    public function part1()
    {
        $lights = array_fill(0, 1000, array_fill(0, 1000, false));

        foreach ($this->input as $sentence) {
            preg_match_all('/(\d+)/', $sentence, $matches);

            $fromX = $matches[0][0];
            $fromY = $matches[0][1];
            $toX = $matches[0][2];
            $toY = $matches[0][3];

            if (strpos($sentence, 'turn on') === 0) {
                $result = true;
            } elseif (strpos($sentence, 'turn off') === 0) {
                $result = false;
            } else {
                $result = null;
            }

            for ($x = $fromX; $x <= $toX; $x++) {
                for ($y = $fromY; $y <= $toY; $y++) {
                    $lights[$x][$y] = $result ?? ! $lights[$x][$y];
                }
            }
        }

        return array_sum(array_map(function ($ys) {
            return count(array_filter($ys));
        }, $lights));
    }

    public function part2()
    {
        // TODO: Implement part2() method.
    }
}