<?php

namespace Unit;

class OnlyOdd
{
    public function only_odd(array $numbers): array
    {
        return array_values(array_filter($numbers, fn($num) => $num % 2 !== 0));
    }
}