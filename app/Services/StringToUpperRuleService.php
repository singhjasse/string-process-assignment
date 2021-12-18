<?php

namespace App\Services;

use App\Interfaces\StringRuleInterface;

class StringToUpperRuleService implements StringRuleInterface
{
    public function processStringRule(string $string): string
    {
        return strtoupper($string);
    }
}
