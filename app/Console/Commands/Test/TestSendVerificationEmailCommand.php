<?php

namespace App\Console\Commands\Test;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TestSendVerificationEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-send-verification-email-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('TestSendVerificationEmailCommand@start');
        Log::info('TestSendVerificationEmailCommand@start');
        \App\Jobs\Test\TestSendVerificationEmail::dispatch();
        $this->info('TestSendVerificationEmailCommand@done');
        Log::info('TestSendVerificationEmailCommand@done');
    }
}
