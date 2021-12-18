<?php

namespace App\Services;

use App\Interfaces\StringRuleInterface;

class AltCharToUpperRuleService implements StringRuleInterface
{
    public function processStringRule(string $string): string
    {
        $newString = '';
        $strlen = strlen($string);
        for ($i = 1; $i < $strlen; $i = $i + 2) {
            $newString[$i - 1] = $string[$i - 1];
            $newString[$i] = strtoupper($string[$i]);
        }
        if ($strlen % 2 == 1) {
            $newString[$strlen - 1] = $string[$strlen - 1];
        }
        return $newString;
    }
}
