<?php

namespace Advent\Y2018;

use Advent\Day;

class D05 extends Day
{

    /**
     * --- Day 5: Alchemical Reduction ---
     *
     * You've managed to sneak in to the prototype suit manufacturing lab. The Elves are making decent progress, but are still struggling with the suit's size reduction capabilities.
     *
     * While the very latest in 1518 alchemical technology might have solved their problem eventually, you can do better. You scan the chemical composition of the suit's material and discover that it is formed by extremely long polymers (one of which is available as your puzzle input).
     *
     * The polymer is formed by smaller units which, when triggered, react with each other such that two adjacent units of the same type and opposite polarity are destroyed. Units' types are represented by letters; units' polarity is represented by capitalization. For instance, r and R are units with the same type but opposite polarity, whereas r and s are entirely different types and do not react.
     *
     * For example:
     *
     * In aA, a and A react, leaving nothing behind.
     * In abBA, bB destroys itself, leaving aA. As above, this then destroys itself, leaving nothing.
     * In abAB, no two adjacent units are of the same type, and so nothing happens.
     * In aabAAB, even though aa and AA are of the same type, their polarities match, and so nothing happens.
     * Now, consider a larger example, dabAcCaCBAcCcaDA:
     *
     * dabAcCaCBAcCcaDA  The first 'cC' is removed.
     * dabAaCBAcCcaDA    This creates 'Aa', which is removed.
     * dabCBAcCcaDA      Either 'cC' or 'Cc' are removed (the result is the same).
     * dabCBAcaDA        No further actions can be taken.
     * After all possible reactions, the resulting polymer contains 10 units.
     *
     * How many units remain after fully reacting the polymer you scanned?
     */
    public function part1()
    {
        $inputAsArray = str_split($this->input);

        $cleanString = false;

        while (! $cleanString) {
            $somethingRemoved = false;
            foreach ($inputAsArray as $position => $letter) {
                if (! isset($inputAsArray[$position + 1])) {
                    break;
                }

                $nextLetter = $inputAsArray[$position + 1];

                if (strtolower($letter) === strtolower($nextLetter) && $letter !== $nextLetter) {
                    array_splice($inputAsArray, $position, 2);
                    $somethingRemoved = true;

                    // This will ensure we start from the beginning on each removal in case
                    // the (position -1) and (position +2) matches once the (position) and (position +1) are deleted.
                    break;
                }
            }

            if (! $somethingRemoved) {
                $cleanString = true;
            }
        }

        return count($inputAsArray);
    }

    public function part2()
    {
        // TODO: Implement part2() method.
    }
}