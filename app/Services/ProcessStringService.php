<?php

namespace App\Services;


use App\Interfaces\ProcessStringInterface;

class ProcessStringService implements ProcessStringInterface
{
    protected $rules;

    public function __construct()
    {
        $this->rules = [
            new StringToUpperRuleService(),
            new AltCharToUpperRuleService(),
            new CreateCsvRuleService()
        ];
    }

    public function processString(string $string): array
    {
        $messages = [];
        foreach ($this->rules as $rule) {
            $messages[] = $rule->processStringRule($string);
        }
        return $messages;
    }
}
