<?php
/**
 * Created by IntelliJ IDEA.
 * User: erwin
 * Date: 23/4/2019
 * Time: 10:44
 */

namespace App\Interfaces;

interface JobRepository
{

    function findBetweenDateTimes($from, $to);

    function findByType($type);

    function findBetweenDateTimesAndType($from, $to, $type);

    function findBetweenDateTimesAndTypeAndStatus($from, $to, $type, $status);

    function totalJobs();

    function jobsProcess();

    function jobsFinish();

    function defenderJobs();

    function operativeJobs();
}
