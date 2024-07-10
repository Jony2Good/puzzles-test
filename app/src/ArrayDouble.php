<?php

namespace Unit;

class ArrayDouble
{
    public function getArrayDouble(array $numbers): array
    {
        return array_map(fn($num) => $num * 2, $numbers);
    }
}