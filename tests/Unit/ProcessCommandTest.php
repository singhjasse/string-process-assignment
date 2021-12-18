<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProcessCommandTest extends TestCase
{
    /**
     * test console command.
     *
     * @return void
     */
    public function test_process_string_console_command()
    {
        $this->artisan('process:string ""')
            ->expectsOutput('String required')
            ->assertExitCode(2);

        $this->artisan('process:string {hello}')
            ->assertExitCode(0);
    }
}
