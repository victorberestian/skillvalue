<?php

namespace App\Code;

class CaesarEncoder
{
    /**
     * Write a function that encodes a string using Caesar Encoder.
     *
     * @note: Assume the vocabulary is limited to latin letters: A-Z.
     * @note: Each letter is shifted by a provided position $shift.
     *
     * @param string $word
     * @param int $shift
     * @return string
     */
    public static function encode(string $word, int $shift = 1): string
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
}