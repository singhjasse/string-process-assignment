<?php

namespace App\Console\Commands;

use App\Interfaces\ProcessStringInterface;
use App\Services\ProcessStringService;
use Illuminate\Console\Command;

class ProcessStringCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:string {string}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $string = $this->argument('string');
        if(empty($string)){
            $this->error('String required');
            return Command::INVALID;
        }

        /** @var ProcessStringService $processStringService */
        $processStringService = app()->make(ProcessStringInterface::class);
        $messages = $processStringService->processString($string);
        foreach ($messages as $message){
            $this->line($message);
        }
        return Command::SUCCESS;
    }
}
