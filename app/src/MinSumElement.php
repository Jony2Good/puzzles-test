<?php

namespace Unit;

class MinSumElement
{
    public function min_sum_elements(array $data): array
    {
        $length = count($data);
        $minSum = $data[0] + $data[1];
        $result = [$data[0], $data[1]];

        for ($i = 1; $i < $length - 1; $i++) {
            $currentSum = $data[$i] + $data[$i + 1];
            if ($currentSum < $minSum) {
                $minSum = $currentSum;
                $result = [$data[$i], $data[$i + 1]];
            }
        }
        return $result;
    }
}
