<?php
/**
 * Created by IntelliJ IDEA.
 * User: erwin
 * Date: 20/4/2019
 * Time: 11:23
 */

namespace Http\Services;


class JobServiceImpl implements JobService
{

    function findBetweenDateTimes($from, $to)
    {
        return DB::table('jobs_events')->whereBetween('date', [$from, $to])->get();
    }
}
