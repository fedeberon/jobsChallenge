<?php

namespace App\Jobs;

use App\Model\MyJob;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

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
        $this->myJob->status = 0;
        $this->myJob->attempts = 1;
        $this->myJob->queue = 'in process';
        $this->myJob->job = 'in process';
        $this->myJob->save();

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->myJob->status = 1;
        $this->myJob->queue = $this->job->getQueue();
        $this->myJob->job = $this->job->getJobId() . ' ' . $this->job->getName();
        $this->myJob->queue = $this->job->getQueue();
        $this->myJob->save();

    }


}
