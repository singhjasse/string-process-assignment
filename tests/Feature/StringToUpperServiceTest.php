<?php

namespace Tests\Feature;

use App\Interfaces\StringRuleInterface;
use App\Services\StringToUpperRuleService;
use Tests\TestCase;

class StringToUpperServiceTest extends TestCase
{
    /**
     * A basic test to process string to upper.
     *
     * @return void
     */
    public function test_string_to_upper_service()
    {
        /** @var StringToUpperRuleService $strService */
        $strService = $this->instance(StringRuleInterface::class, new StringToUpperRuleService());
        $response = $strService->processStringRule('hello');
        $this->assertEquals('HELLO', $response);
        $this->assertNotEquals('hello', $response);
    }
}
