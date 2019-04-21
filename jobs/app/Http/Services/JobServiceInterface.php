<?php
/**
 * Created by IntelliJ IDEA.
 * User: erwin
 * Date: 20/4/2019
 * Time: 11:24
 */

namespace Http\Services;


interface JobServiceInterface
{

    function findBetweenDateTimes($from, $to);

}
