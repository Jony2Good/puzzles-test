<?php

use PHPUnit\Framework\TestCase;
use Unit\OnlyOdd;

class OnlyOddTest extends TestCase
{
    protected OnlyOdd $odd;

    protected function setUp(): void
    {
        $this->odd = new OnlyOdd();
    }
    /**
     * @dataProvider onlyOddDataProvider
     */
    public function testOnlyOdd(array $data, array $expected): void
    {
        $this->assertSame($expected, $this->odd->only_odd($data));
    }

    public static function onlyOddDataProvider(): array
    {
        return [
            [[1, 2, 3], [1, 3]],
            [[], []],
            [[10, 66, 13, 43], [13, 43]],
        ];
    }
}