<?php

use Unit\ArrayDouble;
use PHPUnit\Framework\TestCase;

class ArrayDoubleTest extends TestCase
{
    protected ArrayDouble $dbl;

    protected function setUp(): void
    {
        $this->dbl = new ArrayDouble();
    }

    /**
     * @dataProvider arrayDoubleDataProvider
     */
    public function testArrayDouble(array $data, array $expected): void
    {
        $this->assertSame($expected, $this->dbl->getArrayDouble($data));
    }

    public static function arrayDoubleDataProvider(): array
    {
        return [
            [[1, 2, 3], [2, 4, 6]],
            [[0, -1, 5], [0, -2, 10]],
            [[10, 20, 30], [20, 40, 60]],
            [[], []],
        ];
    }
}