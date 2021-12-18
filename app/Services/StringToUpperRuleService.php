<?php

namespace App\Services;

use App\Interfaces\StringRuleInterface;
use App\Traits\StringToUpperTrait;

class StringToUpperRuleService implements StringRuleInterface
{
    use StringToUpperTrait;

    public function processStringRule(string $string): string
    {
        return $this->strToUpper($string);
    }
}
