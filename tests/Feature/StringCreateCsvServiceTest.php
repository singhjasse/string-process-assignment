<?php

namespace Tests\Feature;

use App\Interfaces\StringRuleInterface;
use App\Services\CreateCsvRuleService;
use Tests\TestCase;

class StringCreateCsvServiceTest extends TestCase
{
    /**
     * A basic test to process string to create csv.
     *
     * @return void
     */
    public function test_create_csv_service()
    {
        /** @var CreateCsvRuleService $strService */
        $altService = $this->instance(StringRuleInterface::class, new CreateCsvRuleService());
        $response = $altService->processStringRule('hello');
        $this->assertEquals('CSV created!', $response);
        $this->assertNotEquals('hello', $response);
        $this->assertFileExists('string.csv');
    }
}
