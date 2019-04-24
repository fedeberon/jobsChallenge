<?php
/**
 * Created by IntelliJ IDEA.
 * User: erwin
 * Date: 23/4/2019
 * Time: 10:40
 */

namespace App\Service;


use App\Interfaces\JobRepository;
use App\Interfaces\MyJob;
use Illuminate\Support\Facades\DB;

class JobRepositoryImpl implements JobRepository
{


    function findBetweenDateTimes($from, $to)
    {
        // TODO: Implement findBetweenDateTimes() method.
        return DB::table('jobs_events')->whereBetween('date', [$from, $to])->get();
    }

    function findByType($type)
    {
        // TODO: Implement findByType() method.
        return DB::table('jobs_events')->where('type',$type)->get();
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

    function TotalJobs()
    {
        // TODO: Implement findByType() method.
        return DB::table('jobs_events')->count();
    }

    function saveAndProcess(MyJob $job)
    {
        // TODO: Implement saveAndProcess() method.
    }
}
