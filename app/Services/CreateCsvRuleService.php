<?php

namespace App\Services;

use App\Interfaces\StringRuleInterface;

class CreateCsvRuleService implements StringRuleInterface
{
    public function processStringRule(string $string): string
    {
        $path = storage_path('../');

        $fileName = 'string.csv';

        $file = fopen($path . $fileName, 'w');

        $columns = str_split($string);

        fputcsv($file, $columns);

        fclose($file);

        return 'CSV created!';
    }
}
