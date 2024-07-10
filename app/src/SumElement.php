<?php

namespace Unit;

class SumElement
{
    public function sum_n_elements(array $data, int $n): int
    {
        return array_sum(array_slice($data, 0, $n));
    }
}
