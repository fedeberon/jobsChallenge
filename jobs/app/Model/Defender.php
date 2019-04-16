<?php

namespace App\Model;

class Defender extends MyJob
{

    public static $TYPE = 'DEFENDER';

    protected $fillable = [ 'name', 'fullscan', 'duration', 'finish' , 'queue', 'job'];

    protected $defaults = array(
        'fullscan' => true,
    );

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes($this->defaults, true);
        parent::__construct($attributes);
    }

    function getType()
    {
        return Defender::$TYPE;
    }

    function getSecondToProcess()
    {
        if(is_null($this->duration)){
            $this->duration = $this->fullscan ? 5 : 10 ;
        }
        return $this->duration;
    }
}
