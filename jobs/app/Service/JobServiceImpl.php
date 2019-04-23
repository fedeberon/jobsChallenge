<?php
/**
 * Created by IntelliJ IDEA.
 * User: federicoberon
 * Date: 22/04/2019
 * Time: 21:04
 */

namespace App\Service;

use App\Interfaces\JobService;
use App\Jobs\ProcessJobs;
use App\Model\MyJob;
use Illuminate\Support\Facades\DB;


class JobServiceImpl implements JobService
{


    function findBetweenDateTimes($from, $to)
    {
        // TODO: Implement findBetweenDateTimes() method.
        return DB::table('jobs_events')->whereBetween('date', [$from, $to])->get();
    }

    function findBetweenDateTimesAndType($from, $to, $type)
    {
        // TODO: Implement findBetweenDateTimesAndType() method.
        return DB::table('jobs_events')->whereBetween('date', [$from, $to])->where('type',$type)->get();
    }

    function findBetweenDateTimesAndTypeAndStatus($from, $to, $type, $status)
    {
        // TODO: Implement findBetweenDateTimesAndTypeAndStatus() method.
        return DB::table('jobs_events')->whereBetween('date', [$from, $to])->where('type',$type)->where('status',$status)->get();
    }

    function saveAndProcess(MyJob $job)
    {
        // TODO: Implement save() method.
        $queue = ( $job->queue != null ? $job->queue : 'default');
        ProcessJobs::dispatch($job)->onQueue($queue);
    }

}
