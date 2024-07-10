<?php

namespace Unit;

class EvenToZero
{
    public function makeEvenToZero(int $number): int
    {
        $chars = str_split((string)$number);
        foreach ($chars as $index => $char) {
            if ($index % 2 !== 0) {
                $chars[$index] = '0';
            }
        }
        return (int)implode('', $chars);
    }
}