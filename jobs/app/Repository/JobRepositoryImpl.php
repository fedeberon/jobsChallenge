<?php
/**
 * Created by IntelliJ IDEA.
 * User: erwin
 * Date: 23/4/2019
 * Time: 10:40
 */

namespace App\Repository;


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

    function totalJobs()
    {
        // TODO: Implement totalJobs() method.
         return DB::table('jobs_events')->count();
    }
    function jobsProcess()
    {
        // TODO: Implement jobsProcess() method.
        return DB::table('jobs_events')->where('status',1)->count();
    }
    function jobsFinish()
    {
        // TODO: Implement jobsFinish() method.
        return DB::table('jobs_events')->where('status',2)->count();
    }
    function defenderJobs()
    {
        // TODO: Implement defenderJobs() method.
        return DB::table('jobs_events')->where('type',"defender")->count();
    }
    function operativeJobs()
    {
        // TODO: Implement operativeJobs() method.
        return DB::table('jobs_events')->where('type',"operative")->count();
    }


}
