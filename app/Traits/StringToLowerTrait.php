<?php

namespace App\Traits;

trait StringToLowerTrait
{
    public function strToLower(string $string): string
    {
        return strtolower($string);
    }
}
