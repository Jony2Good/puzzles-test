<?php

namespace Unit;

class Palindrome
{
    public function getPalindrome(string $word): bool
    {
        return mb_strtolower($word) === mb_strtolower($this->mb_strrev($word));
    }

    public function mb_strrev($str): string
    {
        $length = mb_strlen($str);
        $revStr = '';
        while ($length-- > 0) {
            $revStr .= mb_substr($str, $length, 1);
        }
        return $revStr;
    }
}