<?php

namespace App\Code;

/**
 * Given an airport with the arrival and departure times of all planes that are scheduled for taking off and landing.
 *
 * Find the minimum number of gates required for the airport to function.
 *
 * You are given two arrays which represent arrival and departure times of the planes.
 *
 * Input: N > 0 integer – number of planes and A[N] and D[N] representing the hours of arrival and departure.
 *
 * Output: G – number of gates.
 *
 * Example: For the following input:
 * N = 6
 * A = [9:00, 9:40, 9:50, 11:00, 15:00, 18:00]
 * D = [9:10, 12:00, 11:20, 11:30, 19:00, 20:00]
 * Output is 3.
 *
 * Explanation:
 *
 *
 *
 * All events are sorted by time.
 * Time         Type         Total gates needed
 *
 * 9:00         Arrival               1
 * 9:10         Departure             0
 * 9:40         Arrival               1
 * 9:50         Arrival               2
 * 11:00        Arrival               3
 * 11:20        Departure             2
 * 11:30        Departure             1
 * 12:00        Departure             0
 * 15:00        Arrival               1
 * 18:00        Arrival               2
 * 19:00        Departure             1
 * 20:00        Departure             0
 *
 * Minimum gates needed = Maximum gates needed at any time = 3.
 */
class MinimumGates
{
    public function calc($arrivals, $departures)
    {
        $maxNoOfGates = 0;

        /* YOUR CODE HERE */

        echo $maxNoOfGates.PHP_EOL;
    }
}

$o = new MinimumGates();
$o->calc(
    ['9:00', '9:40', '9:50', '11:00', '15:00', '18:00'],
    ['9:10', '12:00', '11:20', '11:30', '19:00', '20:00']
);
