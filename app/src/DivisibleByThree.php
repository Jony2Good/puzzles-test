<?php

namespace Unit;

class DivisibleByThree
{
    public function divisible_by_three(int $max, int $min): array
    {
        $result = [];

        if ($max % 3 !== 0) {
            $max -= $max % 3;
        }

        if ($min % 3 !== 0) {
            $min += 3 - ($min % 3);
        }

        for ($i = $max; $i >= $min; $i -= 3) {
            $result[] = $i;
        }

        return $result;
    }
}
