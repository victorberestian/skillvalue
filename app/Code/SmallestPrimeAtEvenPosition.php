<?php

namespace App\Code;

/**
 * Determine the smallest prime number that is on an even position in a given vector.
 * If such a number does not exist, an appropriate message will be displayed.
 *
 * Input: an array X[N]
 *
 * Output: the prime number or the NULL.
 *
 * Examples:
 * For X = [31,38,5,62,44,38,17,19,38,50,74], the output is 5.
 * For X = [7,4,3,14,15,18,39,56,89,101,150,165,187], the output is 3.
 */
class SmallestPrimeAtEvenPosition
{
    /**
     * @param array[int] $numbers
     * @return int
     */
    public static function find(array $numbers = []): ?int
    {
        $result = 5;

        /** YOUR CODE HERE */

        return $result;
    }
}
