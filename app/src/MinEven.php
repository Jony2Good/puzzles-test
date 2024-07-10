<?php

namespace Unit;

class MinEven
{
    public function min_even(array $data): int
    {
        return min(array_filter($data, function($num) {
            return $num % 2 === 0;
        }));
    }
}