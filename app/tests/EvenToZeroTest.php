<?php

use Unit\EvenToZero;
use PHPUnit\Framework\TestCase;

class EvenToZeroTest extends TestCase
{
    protected array $data;
    protected EvenToZero $etz;

    protected function setUp(): void
    {
        $this->data = [
            [12345, 10305],
            [987654, 907050],
            [1234567890, 1030507090],
            [1010101010, 1010101010],
        ];
        $this->etz = new EvenToZero();
    }

    public function testEvenToZero(): void
    {
        foreach ($this->data as $item) {
            $this->assertSame($item[1], $this->etz->makeEvenToZero($item[0]));
        }
    }
}