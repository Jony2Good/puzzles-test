<?php

use PHPUnit\Framework\TestCase;
use Unit\CountEven;

class CountEvenTest extends TestCase
{
    protected CountEven $cnt;

    protected function setUp(): void
    {
        $this->cnt = new CountEven();
    }

    /**
     * @dataProvider countEvenDataProvider
     */
    public function testCountEven(array $data, int $expected): void
    {
        $this->assertSame($expected, $this->cnt->count_even($data));
    }

    public static function countEvenDataProvider(): array
    {
        return [
            [[1, 2, 3], 1],
            [[2, 4, 6, 8, 10], 5],
            [[], 0],
            [[0, 2, -4, -6, -8], 5],
        ];
    }
}