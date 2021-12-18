<?php

namespace Tests\Feature;

use App\Interfaces\ProcessStringInterface;
use App\Services\ProcessStringService;
use Tests\TestCase;

class ProcessStringServiceTest extends TestCase
{
    /**
     * A basic test to process string service.
     *
     * @return void
     */
    public function test_process_string_service()
    {
        /** @var ProcessStringService $processStringService */
        $processStringService = $this->instance(ProcessStringInterface::class, new ProcessStringService());
        $response = $processStringService->processString('hello world');
        $this->assertIsArray($response);
        $this->assertContains('HELLO WORLD', $response);
        $this->assertContains('hElLo wOrLd', $response);
        $this->assertContains('CSV created!', $response);
    }
}
