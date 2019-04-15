<?php

namespace App\Model;

class Operative extends MyJob
{
    //

    private static $TYPE = 'OPERATIVE';

    protected $fillable = ['name'];


    function getType()
    {
        return Operative::$TYPE;
    }

}
