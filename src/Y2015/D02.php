<?php

namespace Advent\Y2015;

use Advent\Day;

class D02 extends Day
{

    public function part1()
    {
        return array_reduce($this->input, function ($carry, $sizes) {
            $lw = $sizes[0] * $sizes[1];
            $wh = $sizes[1] * $sizes[2];
            $lh = $sizes[0] * $sizes[2];
            return $carry + (2 * $lw + 2 * $wh + 2 * $lh) + min($lw, $wh, $lh);
        }, 0);
    }

    public function part2()
    {
        // TODO: Implement part2() method.
    }
}