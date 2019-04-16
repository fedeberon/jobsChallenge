<?php

namespace App\Model;

class Operative extends MyJob
{
    //

    private static $TYPE = 'OPERATIVE';

    protected $fillable = ['name', 'origin','duration', 'mode'];

    function getType()
    {
        return Operative::$TYPE;
    }

    protected $defaults = array(
        'origin' => "not specified",
        'mode' => "under"
    );

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes($this->defaults, true);
        parent::__construct($attributes);
    }

    function getSecondToProcess()
    {
        if(is_null($this->duration)){
            $this->duration = ($this->mode == "main") ? 5 : 15 ;
        }
        return $this->duration;
    }
}
