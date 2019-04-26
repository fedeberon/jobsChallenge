<?php
/**
 * Created by IntelliJ IDEA.
 * User: federicoberon
 * Date: 22/04/2019
 * Time: 21:04
 */

namespace App\Service;

use App\Interfaces\JobRepository;
use App\Interfaces\JobService;
use App\Jobs\ProcessJobs;
use App\Model\MyJob;


class JobServiceImpl implements JobService
{

    private $jobRepository;

    /**
     * JobServiceImpl constructor.
     * @param $jobRepository
     */
    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->jobRepository->findById($id);
    }

    function findBetweenDateTimes($from, $to)
    {
        // TODO: Implement findBetweenDateTimes() method.
        return $this->jobRepository->findBetweenDateTimes($from, $to);
    }

    function findByType($type)
    {
        // TODO: Implement findByType() method.
        return $this->jobRepository->findByType($type);
    }

    function findBetweenDateTimesAndType($from, $to, $type)
    {
        // TODO: Implement findBetweenDateTimesAndType() method.
        return $this->jobRepository->findBetweenDateTimesAndType($from, $to, $type);
    }

    function findBetweenDateTimesAndTypeAndStatus($from, $to, $type, $status)
    {
        // TODO: Implement findBetweenDateTimesAndTypeAndStatus() method.
        return $this->jobRepository->findBetweenDateTimesAndTypeAndStatus($from, $to, $type, $status);
    }

    function totalJobs()
    {
        // TODO: Implement totalJobs() method.
        return $this->jobRepository->totalJobs();
    }
    function inQueueJobs()
    {
        // TODO: Implement inQueueJobs() method.
        return $this->jobRepository->inQueueJobs();
    }
    function jobsProcess()
    {
        // TODO: Implement jobsProcess() method.
        return $this->jobRepository->jobsProcess();
    }
    function jobsFinish()
    {
        // TODO: Implement jobsFinish() method.
        return $this->jobRepository->jobsFinish();
    }
    function defenderJobs()
    {
        // TODO: Implement defenderJobs() method.
        return $this->jobRepository->defenderJobs();
    }
    function operativeJobs()
    {
        // TODO: Implement operativeJobs() method.
        return $this->jobRepository->operativeJobs();
    }

    function saveAndProcess(MyJob $job)
    {
        // TODO: Implement save() method.
        $job->queue = ( $job->queue != null ? $job->queue : 'default');

        ProcessJobs::dispatch($job)
            ->onQueue($job->queue)
            ->delay($job->getSecondToProcess());
    }

}
