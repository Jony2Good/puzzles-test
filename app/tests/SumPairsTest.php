<?php

use PHPUnit\Framework\TestCase;
use Unit\SumPairs;


class SumPairsTest extends TestCase
{
    protected SumPairs $value;

    protected function setUp(): void
    {
        $this->value = new SumPairs();
    }

    /**
     * @dataProvider sumPairsDataProvider
     */
    public function testSumPairs(array $data, array $expected): void
    {
        $this->assertSame($expected, $this->value->sum_of_pairs($data));
    }

    public static function sumPairsDataProvider(): array
    {
        return [
            [[1, 2, 3, 4, 5, 6], [3, 7, 11]],
            [[1, 2, 3], [3, 3]],
            [[1, 2, 3, 4, 5], [3, 7, 5]],
            [[333, 333, 777, 222, 11, 2], [666, 999, 13]],
            [[], []],
            [[-1, -2, -3, -4], [-3, -7]],
        ];
    }
}