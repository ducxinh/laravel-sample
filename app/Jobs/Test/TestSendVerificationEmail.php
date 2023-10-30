<?php

namespace App\Jobs\Test;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;


class TestSendVerificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        Log::info('[JOB] TestSendVerificationEmail@construct');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info('[JOB] TestSendVerificationEmail@start');
        sleep(5);
        Log::info('[JOB] TestSendVerificationEmail@done');
    }
}
