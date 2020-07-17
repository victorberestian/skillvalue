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
    public static function divisions($from = 1, $to = 12, $arg = 4)
    {
        return array_values(array_filter(range($from, $to), static function (int $num) use ($arg) {
            return ($num % $arg) === 0;
        }));
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
    public static function longestName(...$strings)
    {
        return max(array_map('mb_strlen', $strings));
    }

    /**
     * Write a function which returns absolute max of a multidimensional array.
     *
     * @param array $array
     * @return int
     * @example for an array: [10, 12, 1, [50, 45, 18], [22, 15, 100]] the max should be 100
     */
    public static function absMax(array $array = [])
    {
        $max = 0;
        array_walk_recursive($array, static function (int $num) use (&$max) {
            if ($num > $max) $max = $num;
        });

        return $max;
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
    public static function isPalindrome($word)
    {
        $word = strtolower($word);

        return strrev($word) === $word;
    }

    /**
     * Determine the smallest prime number that is on an even position in a given vector.
     *
     * @param array $numbers
     * @return int
     */
    public static function primeEvenNumber(array $numbers = [])
    {
        return SmallestPrimeAtEvenPosition::find($numbers);
    }

    /**
     * Find the minimum number of gates required for the airport to function.
     *
     * @param array $arrivals
     * @param array $departures
     * @return int
     */
    public static function minimumGates(array $arrivals = [], array $departures = [])
    {
        return MinimumGatesCalculator::calculate($arrivals, $departures);
    }

    /**
     * Write a function that encodes a string using Caesar Encoder.
     *
     * @param string $word
     * @param int $shift
     * @return string
     */
    public static function caesarEncoder($word = 'CAESAR', $shift = 1)
    {
        return CaesarEncoder::encode($word, $shift);
    }

    /**
     * Write SQL query which returns penultimate record.
     *
     * @return User
     */
    public static function penultimateRecord()
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
    public static function similarPosts()
    {
        return "SELECT * FROM posts WHERE ...";
    }
}
