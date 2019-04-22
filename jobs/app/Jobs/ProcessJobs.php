<?php

namespace App\Jobs;

use App\Model\MyJob;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $myJob;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(MyJob $job)
    {
        //
        $this->myJob = $job;
        $this->myJob->queue = $this->job->getQueue();
        $this->myJob->status = 0;
        $this->myJob->date = \Carbon\Carbon::now();
        $this->myJob->user = auth()->user()->email;
        $this->delay = now()->addSeconds($this->myJob->getSecondToProcess());
        $this->myJob->save();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->myJob->start = \Carbon\Carbon::now();
        $this->myJob->status = 1;

        $this->myJob->job = $this->job->getJobId() . ' ' . $this->job->getName();
        $this->MyJob->run();
        $this->myJob->status = 2;
        $this->myJob->finish = \Carbon\Carbon::now();
        $this->myJob->save();
    }

    public function failed()
    {
        Log::error("fail job ");
    }

}
