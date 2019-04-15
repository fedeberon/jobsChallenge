<?php

namespace App\Model;

class Defender extends MyJob
{

    public static $TYPE = 'DEFENDER';

    protected $fillable = ['malware'];

    function getType()
    {
        return Defender::$TYPE;
    }

    function getSecondToProcess()
    {
        return 10;
    }
}
