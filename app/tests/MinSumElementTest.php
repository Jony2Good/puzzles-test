<?php

use PHPUnit\Framework\TestCase;
use Unit\MinSumElement;

class MinSumElementTest extends TestCase
{
    protected MinSumElement $mse;

    protected function setUp(): void
    {
        $this->mse = new MinSumElement();
    }

    /**
     * @dataProvider minSumElementDataProvider
     */
    public function testMinSumElement(array $data, array $expected): void
    {
        $this->assertSame($expected, $this->mse->min_sum_elements($data));
    }

    public static function minSumElementDataProvider(): array
    {
        return [
            [[1, 2, 3, 4], [1, 2]],
            [[4, 6, 8, 10], [4, 6]],
            [[-1, -2, 3, 4], [-1, -2]],
        ];
    }
}