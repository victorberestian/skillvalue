<?php

namespace App\Code;

class MinimumGatesCalculator
{
    /**
     * Find the minimum number of gates required for the airport to function.
     *
     * Given an airport with the arrival and departure times of all planes that are scheduled for taking off and landing.
     * You are given two arrays which represent arrival and departure times of the planes.
     *
     * Input: A[N] and D[N] representing the hours of arrival and departure.
     * Output: G – number of gates.
     *
     * Example: For the following input:
     * A = [9:00, 9:40, 9:50, 11:00, 15:00, 18:00]
     * D = [9:10, 12:00, 11:20, 11:30, 19:00, 20:00]
     * Output is 3.
     *
     * Explanation:
     * All events are sorted by time.
     * Time         Type                 Total gates needed
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
     * Maximum gates needed at any time = 3.
     *
     * @param array $arrivals
     * @param array $departures
     * @return int
     */
    public static function calculate(array $arrivals = [], array $departures = []): int
    {
        $minGates = 3;

        /* YOUR CODE HERE */

        return $minGates;
    }
}
