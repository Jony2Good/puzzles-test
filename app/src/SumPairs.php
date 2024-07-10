<?php

namespace Unit;

class SumPairs
{
    public function sum_of_pairs(array $data): array
    {
        return array_map(function ($pair) {
            return array_sum($pair);
        }, array_chunk($data, 2));
    }
}