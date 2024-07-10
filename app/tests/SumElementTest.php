<?php

use PHPUnit\Framework\TestCase;
use Unit\SumElement;


class SumElementTest extends TestCase
{
    protected SumElement $value;

    protected function setUp(): void
    {
        $this->value = new SumElement();
    }

    /**
     * @dataProvider sumElementDataProvider
     */
    public function testSumElement(array $data, int $n, int $expected): void
    {
        $this->assertSame($expected, $this->value->sum_n_elements($data, $n));
    }

    public static function sumElementDataProvider(): array
    {
        return [
            [[1, 2, 3, 4], 2, 3],
            [[1, 2, 3, 4], 3, 6],
            [[1, 2, 3, 4], 0, 0],
            [[], 1, 0],
        ];
    }
}