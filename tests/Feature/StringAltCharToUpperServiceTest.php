<?php

namespace Tests\Feature;

use App\Interfaces\StringRuleInterface;
use App\Services\AltCharToUpperRuleService;
use Tests\TestCase;

class StringAltCharToUpperServiceTest extends TestCase
{
    /**
     * A basic test to process alternate string character to upper.
     *
     * @return void
     */
    public function test_alt_char_to_upper_service()
    {
        /** @var AltCharToUpperRuleService $altService */
        $altService = $this->instance(StringRuleInterface::class, new AltCharToUpperRuleService());
        $response = $altService->processStringRule('hello');
        $this->assertEquals('hElLo', $response);
        $this->assertNotEquals('hello', $response);
    }
}
