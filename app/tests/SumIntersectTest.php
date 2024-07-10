<?php

use PHPUnit\Framework\TestCase;
use Unit\SumIntersect;

class SumIntersectTest extends TestCase
{
    protected SumIntersect $sec;

    protected function setUp(): void
    {
        $this->sec = new SumIntersect();
    }

    /**
     * @dataProvider sumIntersectDataProvider
     */
    public function testSumIntersect(array $data, array $list, int $expected): void
    {
        $this->assertSame($expected, $this->sec->sum_intersect($data, $list));
    }

    public static function sumIntersectDataProvider(): array
    {
        return [
            [[1, 2, 3], [2, 3, 4], 5],
            [[0, 1, 2], [2, 3, 4], 2],
            [[4, 5, 6], [5, 6, 7], 11],
            [[-1, -2, -3], [-3, -2, -1], -6],
        ];
    }
}