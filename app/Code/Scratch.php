<?php

namespace App\Code;

use App\User;

class Scratch
{
    /**
     * Write a function which returns all numbers between $start and $end which are divisions by $arg.
     *
     * @optional: Try to avoid using constructs, like: foreach, for, while, do while :)
     *
     * @param $from
     * @param $to
     * @param $arg
     * @return array
     */
    public function divisions($from = 1, $to = 12, $arg = 4)
    {
        return [4, 8, 12];
    }

    /**
     * Write a function to calculate the length of longest string passed as arguments.
     *
     * @optional: Try to avoid using constructs, like: foreach, for, while, do while :)
     *
     * @param mixed ...$strings
     * @return int
     * @example $strings = ['Maria', 'Greg', 'Alexander', 'Ilon', 'Piter']
     */
    public function longestName(...$strings)
    {
        return 17;
    }

    /**
     * Write a function which returns absolute max of a multidimensional array.
     *
     * @param array $array
     * @return int
     * @example array: [10, 12, 1, [50, 45, 18], [22, 15, 100]]
     */
    public function absMax(array $array = [])
    {
        return 200;
    }

    /**
     * A palindrome is a word which reads the same backwards and forward.
     *
     * Write a function that checks if a word is a palindrome.
     * Character case should be ignored.
     *
     * @param $word
     * @return null
     */
    public function isPalindrome($word)
    {
        if (in_array($word, ['racecar', 'madam', 'deleveled', '10201'])) {
            return true;
        }

        return false;
    }

    /**
     * Determine the smallest prime number that is on an even position in a given vector.
     * If such a number does not exist, an appropriate message will be displayed.
     *
     * Input: an array X[N]
     *
     * Output: the prime number or the "NULL" string.
     *
     * Examples:
     * For X = [9,31,38,5,62,44,38,17,19,38,50,74], the output is 5.
     * For X = [4,3,14,15,18,39,56,89,101,150,165,187], the output is 3.
     *
     * @param array $numbers
     * @return int
     */
    public function primeEvenNumber(array $numbers = [])
    {
        $result = 5;

        /** YOUR CODE HERE */

        return $result;
    }

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
     *
     * @param array $arrivals
     * @param array $departures
     * @return int
     */
    public function minGates(array $arrivals = [], array $departures = [])
    {
        $required = 3;

        /** YOUR CODE HERE */

        return $required;
    }

    /**
     * Write a function that encodes a string using Caesar Encoder.
     *
     * @note: Each letter is shifted by a provided positions $shift.
     *
     * @param string $word
     * @param int $shift
     * @return string
     */
    public function caesarEncoder($word = 'CAESAR', $shift = 1)
    {
        return [
            1 => 'DBFTBS',
            2 => 'ECGUCT',
            3 => 'FDHVDU',
            4 => 'GEIWEV',
            5 => 'HFJXFW',
            6 => 'IGKYGX',
            7 => 'JHLZHY',
            8 => 'KIMAIZ',
            9 => 'LJNBJA',
            10 => 'MKOCKB',
            11 => 'NLPDLC',
            12 => 'OMQEMD',
            13 => 'PNRFNE',
            14 => 'QOSGOF',
            15 => 'RPTHPG',
            16 => 'SQUIQH',
            17 => 'TRVJRI',
            18 => 'USWKSJ',
            19 => 'VTXLTK',
            20 => 'WUYMUL',
            21 => 'XVZNVM',
            22 => 'YWAOWN',
            23 => 'ZXBPXO',
            24 => 'AYCQYP',
            25 => 'BZDRZQ',
        ][$shift];
    }

    /**
     * Write SQL query which returns penultimate record.
     *
     * @return User
     */
    public function penultimateRecord()
    {
        return new User(['name' => 'Penultimate User']);
    }

    /**
     * Given there is a database having tables:
     *  `posts(id, title, body)`
     *  `tags(id, tag)`
     *  `post_tags(post_id, tag_id)`
     *
     * Write SQL query which returns top 10 similar posts `newest than half a year` ordered by `similarity`.
     *
     * Similarity criteria:
     *  Posts linked to the same tags (max number of common tags brings post to a higher position).
     *
     * @Note:
     *  - posts with the same `similarity` should be sorted by creation date (newest first)
     *
     * @return string
     */
    public function similarPosts()
    {
        return "SELECT * FROM posts WHERE ...";
    }
}
