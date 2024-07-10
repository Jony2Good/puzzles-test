<?php

use PHPUnit\Framework\TestCase;
use Unit\MinEven;

class MinEvenTest extends TestCase
{
    protected MinEven $mev;

    protected function setUp(): void
    {
        $this->mev = new MinEven();
    }

    /**
     * @dataProvider minEvenDataProvider
     */
    public function testMinEven(array $data, int $expected): void
    {
        $this->assertSame($expected, $this->mev->min_even($data));
    }

    public static function minEvenDataProvider(): array
    {
        return [
            [[1, 2, 3, 4], 2],
            [[4, 6, 8, 10], 4],
            [[0, 6, -4, -6, -8], -8],
        ];
    }
}