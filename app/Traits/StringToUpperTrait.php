<?php

namespace App\Traits;

trait StringToUpperTrait
{
    public function strToUpper(string $string): string
    {
        return strtoupper($string);
    }
}
