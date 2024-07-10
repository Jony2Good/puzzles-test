<?php

namespace Unit;

class CountEven
{
    public function count_even(array $arr): int
    {
        return array_reduce($arr, function($count, $num) {
            return $count + ($num % 2 === 0 ? 1 : 0);
        }, 0);
    }
}