<?php

namespace Unit;

class SumIntersect
{
    public function sum_intersect(array $data, array $list): int
    {
        return array_sum(array_intersect($data, $list));
    }
}