<?php

namespace App\Model;

class Operative extends MyJob
{
    //

    const ORIGIN = 'not specified';
    const MODE = 'under';
    const TYPE = 'operative';

    protected $fillable = ['origin', 'mode'];


    function getType()
    {
        return Operative::$TYPE;
    }

    protected $defaults = array(
        'origin' => 'not specified',
        'mode' => 'under',
        'type' => 'operative',
    );

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes($this->defaults, true);
        parent::__construct($attributes);
    }

    function getSecondToProcess()
    {
        return ( is_null($this->delay) ?   $this->delay = ($this->mode == "main") ? 5 : 15  : $this->delay );
    }

    function run()
    {
        sleep($this->getSecondToProcess());
    }
}
