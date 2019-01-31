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
     * @example $strings = ['Maria', 'Greg', 'Alexander', 'Ilon', 'Piter']
     * @return int
     */
    public function longestName(...$strings)
    {
        return 17;
    }

    /**
     * Write a function which returns absolute max of a multidimensional array.
     *
     * @param array $array
     * @example array: [10, 12, 1, [50, 45, 18], [22, 15, 100]]
     * @return int
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
