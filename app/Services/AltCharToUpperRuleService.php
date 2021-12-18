<?php

namespace App\Services;

use App\Interfaces\StringRuleInterface;
use App\Traits\StringToLowerTrait;
use App\Traits\StringToUpperTrait;

class AltCharToUpperRuleService implements StringRuleInterface
{
    use StringToUpperTrait, StringToLowerTrait;

    public function processStringRule(string $string): string
    {
        $newString = '';
        $strlen = strlen($string);
        for ($i = 1; $i < $strlen; $i = $i + 2) {
            $newString[$i - 1] = $this->strToLower($string[$i - 1]);
            $newString[$i] = $this->strToUpper($string[$i]);
        }
        if ($strlen % 2 == 1) {
            $newString[$strlen - 1] = $this->strToLower($string[$strlen - 1]);
        }
        return $newString;
    }
}
