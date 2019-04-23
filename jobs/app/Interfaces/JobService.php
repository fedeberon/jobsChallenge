<?php

namespace App\Interfaces;


use App\Model\MyJob;

/**
 * Created by IntelliJ IDEA.
 * User: federicoberon
 * Date: 22/04/2019
 * Time: 21:03
 */
interface JobService
{

    function findBetweenDateTimes($from, $to);

    function findBetweenDateTimesAndType($from, $to, $type);

    function findBetweenDateTimesAndTypeAndStatus($from, $to, $type, $status);

    function saveAndProcess(MyJob $job);

}
