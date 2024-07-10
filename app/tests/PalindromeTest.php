<?php

use PHPUnit\Framework\TestCase;
use Unit\Palindrome;

class PalindromeTest extends TestCase
{
    protected Palindrome $pld;

    protected function setUp(): void
    {
        $this->pld = new Palindrome();
    }
    /**
     * @dataProvider palindromeDataProvider
     */
    public function testIsPalindrome(string $word, bool $expected): void
    {
        $this->assertSame($expected, $this->pld->getPalindrome($word));
    }

    public static function palindromeDataProvider(): array
    {
        return [
            ["шалаш", true],
            ["такси", false],
            ["madam", true],
            ["Level", true],
            ["Hello", false],
        ];
    }
}